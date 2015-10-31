<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController {

    public $components = array('Auth', 'Session');
    public $uses = array('State', 'District', 'User');

//    public function beforeFilter() {
//        parent::beforeFilter();
////        if (!isset($this->Auth)) {
////            debug(get_included_files());
////            die;
////        }
//    }

    public function login() {
        if ($this->request->is('POST')) {
            $username = $this->request->data['username'];
            $password = $this->Auth->password($this->request->data['password']);
            $arrUser = $this->User->find('first', array('conditions' => array('username' => $username, 'password' => $password), 'limit' => '1'));
//            print_r($arrUser);
            //die();
            if (!empty($arrUser)) {
                $this->Auth->login($arrUser);
                $this->Session->write('userFullName', $arrUser['User']['fullname']);
                $this->Session->write('userId', $arrUser['User']['id']);
                $this->redirect(array('controller' => 'Index', 'action' => 'home'));
            } else {
                $this->Session->write('flashFlag', 'Error');
                $this->Session->setFlash('Invalid username or password');
            }
        }
    }

    public function logout() {
        $this->Session->destroy();
        $this->redirect(array('controller' => 'Index', 'action' => 'home'));
    }

    public function register() {
        $arrState = $this->State->find('list', array('fields' => array('State.stateId', 'State.stateName')));
        $this->set('arrState', $arrState);
        if ($this->request->is('POST')) {
            $userData = $this->request->data;
            if ($this->User->save($userData)) {
                $this->Session->write('flashFlag', 'Success');
                $this->Session->setFlash('User Registration done.Please Login here.');
                $this->redirect('login');
            } else {
                $this->Session->write('flashFlag', 'Error');
                $this->Session->setFlash('User Registration failed.Please try again.');
            }
        }
    }

    public function getUserDistrict() {
        $this->layout = 'ajax';
        $this->autoRender = false;
        $this->request->onlyAllow('ajax');
        $stateId = $this->request->data['stateId'];
        $arrDistrict = $this->District->find('list', array(
            'fields' => array('District.districtId', 'District.districtName'),
            'conditions' => array('District.stateId' => $stateId))
        );
        $str = '<option value="">Select</option>';
        foreach ($arrDistrict as $key => $value):
            $str.='<option value=' . $key . '>' . $value . '</option>';
        endforeach;
        echo $str;
        die;
        //$this->set('arrDistrict', $arrDistrict);
    }

    public function forgot_password() {
        if (!empty($this->data)) {
//            $arrUser = $this->User->find('first', array('conditions' => array('username' =>$this->data['User']['username']), 'limit' => '1'));
            $user = $this->User->findByUsername($this->data['User']['username']);
            if (empty($user)) {
                $this->Session->setflash('Sorry, the username entered was not found.');
                $this->redirect('/users/forgot_password');
            } else {
                $user = $this->__generatePasswordToken($user);
                if ($this->User->save($user) && $this->__sendForgotPasswordEmail($user['User']['id'])) {
                    $this->Session->setflash('Password reset instructions have been sent to your email address.
						You have 24 hours to complete the request.');
                    $this->redirect('/users/login');
                }
            }
        }
    }

    function __generatePasswordToken($user) {
        if (empty($user)) {
            return null;
        }

        // Generate a random string 100 chars in length.
        $token = "";
        for ($i = 0; $i < 100; $i++) {
            $d = rand(1, 100000) % 2;
            $d ? $token .= chr(rand(33, 79)) : $token .= chr(rand(80, 126));
        }

        (rand(1, 100000) % 2) ? $token = strrev($token) : $token = $token;

        // Generate hash of random string
        $hash = Security::hash($token, 'sha256', true);

        for ($i = 0; $i < 20; $i++) {
            $hash = Security::hash($hash, 'sha256', true);
        }

        $user['User']['reset_password_token'] = $hash;
        $user['User']['token_created_at'] = date('Y-m-d H:i:s');

        return $user;
    }

    function __sendForgotPasswordEmail($id = null) {
        if (!empty($id)) {
            $this->User->id = $id;
            $User = $this->User->read();
            $Email = new CakeEmail();
            $Email->emailFormat('html');
            $Email->config('smtp');
            $Email->to($User['User']['email']);
            $Email->subject('Password Reset Request - DO NOT REPLY');
            $Email->replyTo('do-not-reply@example.com');
            $Email->viewVars($User);
//            $Email->from('Do Not Reply <do-not-reply@example.com>');
            $Email->template('reset_password_request');
//            $this->set('User', $User);
//            $Email->sendAs  'both';
            $Email->send();
            return true;
        }
        return false;
    }

    function reset_password_token($reset_password_token = null) {
        if (empty($this->data)) {
            $this->data = $this->User->findByResetPasswordToken($reset_password_token);
            if (!empty($this->data['User']['reset_password_token']) && !empty($this->data['User']['token_created_at']) &&
                    $this->__validToken($this->data['User']['token_created_at'])) {
                $this->data['User']['id'] = null;
                $_SESSION['token'] = $reset_password_token;
            } else {
                $this->Session->setflash('The password reset request has either expired or is invalid.');
                $this->redirect('/users/login');
            }
        } else {
            if ($this->data['User']['reset_password_token'] != $_SESSION['token']) {
                $this->Session->setflash('The password reset request has either expired or is invalid.');
                $this->redirect('/users/login');
            }

            $user = $this->User->findByResetPasswordToken($this->data['User']['reset_password_token']);
            $this->User->id = $user['User']['id'];

            if ($this->User->save($this->data, array('validate' => 'only'))) {
                $this->data['User']['reset_password_token'] = $this->data['User']['token_created_at'] = null;
                if ($this->User->save($this->data) && $this->__sendPasswordChangedEmail($user['User']['id'])) {
                    unset($_SESSION['token']);
                    $this->Session->setflash('Your password was changed successfully. Please login to continue.');
                    $this->redirect('/users/login');
                }
            }
        }
    }

    function __validToken($token_created_at) {
        $expired = strtotime($token_created_at) + 86400;
        $time = strtotime("now");
        if ($time < $expired) {
            return true;
        }
        return false;
    }

    public function saveRegisterForm() {
        $this->layout = 'ajax';
        $this->autoRender = false;
        $this->request->onlyAllow('ajax');

        die();
    }

}
