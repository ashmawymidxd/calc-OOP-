<?php

namespace ahmed\controllers;

use ahmed\core\controller;

class categoryController extends controller{

    public function index(){
        return $this->view('Website/category/index');
    }
    
}