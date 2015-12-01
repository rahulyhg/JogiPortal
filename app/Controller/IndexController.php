<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class IndexController extends AppController {

    var $component = array('RequestHandler', 'Auth');
    var $uses = array('State', 'District', 'User');
    var $helpers = array('Menu');

    public function home() {
        
    }

}
