<?php

// namespace classes;
require 'abstractOpe.php';

class calcAdvanced extends abstractOpe{

    /*
    this is base constructor
    */
    function __construct(){

    }

    function mod(){
        return $this->num1 % $this->num2;
    }

    function segmoid(){
        return $this->num1 % $this->num2;
    }

    static function showForm(){
        echo '
        <form action="" method="post">
            <h1>Calculator</h1>
            <input type="text" name="num1" placeholder="Enter First Number">
            <input type="text" name="num2" placeholder="Enter Second Number">
            <select name="operator" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>

            <input type="submit" name="submit" value="Calculate">
        </form>
        ';
    }

    function addation(){
        return $this->num1 + $this->num2;
    }

}