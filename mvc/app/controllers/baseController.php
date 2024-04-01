<?php

namespace ahmed\controllers;

use ahmed\core\controller;

class baseController extends controller{

    public function index($id){
        echo "hello wold".$id;
        return $this->view('home/index');
    }
    
}