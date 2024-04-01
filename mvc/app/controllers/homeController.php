<?php

namespace ahmed\controllers;

use ahmed\core\controller;
use ahmed\models\Users;

class homeController extends controller{

    public function index(){
        return $this->view('index');
    }

    public function create(){
        $Users = new Users();
        $data = [
            'name' => 'Ahmed',
            'email' => 'uyu36545@gmail.com',
            'password' => '123456'
        ];

        $Users->insertUser($data);
        if($Users == 'Data inserted successfully'){
            return $this->view('home/index');
        }
    }

    public function upgrade(){
        $Users = new Users();
        $data = [
            'id' => 1,
            'name' => 'Ahmed',
            'email' => 'uyu36515@gmail.com',
            'password' => '123456'
        ];
        $Users->update($data);

        if($Users){
            echo 'Data updated successfully';
        }
    }

    public function destroy(){
        $Users = new Users();
        $Users->delete(1);
        if($Users){
            echo 'Data deleted successfully';
        }
    }

    public function show(){
        $Users = new Users();
        $data = $Users->selectInstructor();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        // return $this->view('index', ['data' => $data]);
    }

}   