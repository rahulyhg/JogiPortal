<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    var $name = 'User';

//    public function beforeSave($options = array()) {
//        if (!empty($this->data[$this->alias]['password'])) {
//            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
//            $this->data[$this->alias]['password'] = $passwordHasher->hash(
//                    $this->data[$this->alias]['password']
//            );
//        }
//        return true;
//    }

    public function beforeSave($options = array()) {
        if (!empty($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password(
                            $this->data[$this->alias]['password']
            );
        }
        return true;
    }

}
