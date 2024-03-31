<?php

namespace ahmed\controllers;
use ahmed\core\controller;

class homeController extends controller{

    public function index(){
        return $this->view('home/index');
    }
   
}   