<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author Satyajit
 */
class NewsController extends AppController {

    //put your code here
    public $component = array('Auth', 'Session', 'Cookie');
    public $uses = array('State', 'User', 'News');

    public function view() {
        $this->set('activeMenu', 'profile');
        $arrNews = $this->News->find('all');
        $this->set('arrNews', $arrNews);
    }

    public function add() {
        
    }

    public function edit() {
        
    }

    public function delete() {
        
    }

}
