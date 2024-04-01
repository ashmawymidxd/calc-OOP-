<?php
namespace ahmed\models;
use ahmed\core\DB;

class Instrutor extends DB{
    public function selectInstructor(){
        return  $this->select();
    }
}