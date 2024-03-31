<?php
namespace ahmed\controllers;

class userController{
    public function index(){
        echo "user controller index method";
    }
    public function show($id){
        echo "user controller show method with id = $id";
    }
}