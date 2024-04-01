<?php

namespace ahmed\controllers;

use ahmed\core\controller;
use ahmed\models\Users;
use ahmed\core\helper;

class userController extends controller{

    public function index(){
        return $this->view('Website/home');
    }

    public function login(){
        session_start();
        if(isset($_SESSION['user'])){
            helper::redirect('category/index');
        }
        return $this->view('Auth/login');
    }

    public function loginRequest(){
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];

        $Users = new Users();
        $userData = $Users->getUserByEmailPassword($email, $password);
        if(!empty($userData)){
            $_SESSION['user'] = $userData; 
            $_SESSION['error'] = []; 
            helper::redirect('home/index');

        }else{
            $_SESSION['error'] [] = 'Email or password is incorrect';
            helper::redirect('user/login');
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        helper::redirect('user/login');
    }

    public function register(){
        return $this->view('Auth/register');
    }

    public function registerRequest(){
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['password'] = $_POST['password'];
        $Users = new Users();
        if($Users->insertUser($data)){
            return $this->view('Auth/login');
        }
    }
}