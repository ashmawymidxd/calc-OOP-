<?php

namespace ahmed\controllers;

use ahmed\core\controller;

class baseController extends controller{

    public function index(){
        return $this->view('index');
    }
    
}