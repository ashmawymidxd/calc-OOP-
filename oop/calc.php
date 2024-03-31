<?php
// namespace classes;

// require 'calcAdvanced.php';
// require 'calcInterface.php';

// -------- you can make this or use spl_autoload_register function
spl_autoload_register(function($class){
    require $class . '.php';
});


class Calce extends calcAdvanced implements calcInterface{
    public $num1;
    public $num2;
    public $operator;
    const PI = 3.14159;

    function __construct(){
        echo "the result is: ";
    }

    function setNum1($num1){
        $this->num1 = $num1;
    }

    function setNum2($num2){
        $this->num2 = $num2;
    }

    function setOperator($operator){
        $this->operator = $operator;
    }

    function add(){
        return $this->num1 + $this->num2;
    }

    function sub(){
        return $this->num1 - $this->num2;
    }

    function mul(){
        return $this->num1 * $this->num2;
    }

    function div(){
        return $this->num1 / $this->num2;
    }

    function getPi(){
        return self::PI;
    }

    function calculate(){
        switch ($this->operator)
        {
            case '+':
                echo $this->add();
                break;
            case '-':
                echo $this->sub();
                break;
            case '*':
                echo $this->mul();
                break;
            case '/':
                echo $this->div();
                break;
            case '%':
                echo $this->mod();
                break;
            default:
                echo "Invalid Operator";
        }
    }
}