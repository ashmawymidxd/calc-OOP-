<?php
namespace ahmed\models;
use ahmed\core\DB;

class Users extends DB{

    public function insertUser($data){
        return $this->insert($data);
    }

    public function getUserByEmailPassword($email, $password){
        return  $this->sqlQuery("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    }

    public function selectall(){
        return $this->select();
    }
}