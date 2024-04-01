<?php

namespace ahmed\controllers;

use ahmed\core\controller;
use ahmed\models\Instrutor;

class homeController extends controller{
    public $table = 'users';
    public function index(){
        return $this->view('home/index');
    }

    public function create(){
        $Instrutor = new Instrutor();
        $data = [
            'name' => 'Ahmed',
            'email' => 'uyu36555@gmail.com',
            'password' => '123456'
        ];

        $Instrutor->insert($data);
        if($Instrutor == 'Data inserted successfully'){
            return $this->view('home/index');
        }
    }

    public function upgrade(){
        $Instrutor = new Instrutor();
        $data = [
            'id' => 1,
            'name' => 'Ahmed',
            'email' => 'uyu36515@gmail.com',
            'password' => '123456'
        ];
        $Instrutor->update($data);

        if($Instrutor){
            echo 'Data updated successfully';
        }
    }

    public function destroy(){
        $Instrutor = new Instrutor();
        $Instrutor->delete(1);
        if($Instrutor){
            echo 'Data deleted successfully';
        }
    }

    public function show(){
        $Instrutor = new Instrutor();
        $data = $Instrutor->selectInstructor();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}   