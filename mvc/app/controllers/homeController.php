<?php

namespace ahmed\controllers;

use ahmed\core\controller;
use ahmed\core\DB;

class homeController extends controller{

    public function index(){
        return $this->view('home/index');
    }

    public function create(){
        $db = new DB();
        $data = [
            'name' => 'Ahmed',
            'email' => 'uyu36525@gmail.com',
            'password' => '123456'
        ];
        $db->insert('users', $data);
        if($db == 'Data inserted successfully'){
            return $this->view('home/index');
        }
    }

    public function upgrade(){
        $db = new DB();
        $data = [
            'id' => 1,
            'name' => 'Ahmed',
            'email' => 'uyu36515@gmail.com',
            'password' => '123456'
        ];
        $db->update('users', $data);

        if($db){
            echo 'Data updated successfully';
        }
    }

    public function destroy(){
        $db = new DB();
        $db->delete('users', 1);
        if($db){
            echo 'Data deleted successfully';
        }
    }

    public function show(){
        $db = new DB();
        $data = $db->select('users');
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}   