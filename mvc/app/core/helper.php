<?php
namespace ahmed\core;
class helper{
    public static function redirect($url){
        header("Location: /calc(OOP)/mvc/public/$url");
    }
}
