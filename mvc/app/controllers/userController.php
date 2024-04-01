<?php

namespace ahmed\controllers;

use ahmed\core\controller;
use ahmed\models\Users;

class userController extends controller{

    public function index(){
        return $this->view('Website/home');
    }

    public function login(){
        return $this->view('Website/login');
    }

    public function loginRequest(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $Users = new Users();
        if($Users->getUserByEmailPassword($email, $password)){
            echo "Login successfully";
        }else{
            echo "Login failed";
        }
    }

    public function register(){
        return $this->view('Website/register');
    }

    public function registerRequest(){
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
        
        $Users = new Users();
        if($Users->insertUser($data)){
            return $this->view('Website/login');
        }
     
    }
    
}