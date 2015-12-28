<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AboutController extends AppController {

    var $helpers = array('Menu');

    public function samaj_history() {
        $this->set('activeMenu', 'about');
    }

    public function navnath_history() {
        $this->set('activeMenu', 'about');
    }

    public function navnath_temples() {
        $this->set('activeMenu', 'about');
    }

}
