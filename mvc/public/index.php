<?php


// $name = 'ahmed hassan shehata';

// $myNameArray = explode(' ', $name);

// print_r($myNameArray[2]);  

// print_r ($_SERVER['QUERY_STRING']);

// $path = explode('/', $_SERVER['QUERY_STRING']);

// print_r($path[2]);

// use app\controller\userController;
// require 'app/controller/userController.php';

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));
define('APP', ROOT.DS.'app');
define('VIEW', APP.DS.'views'.DS);
define('CONTROLLERS', APP.DS.'controllers');
define('MODEL', APP.DS.'models');
define('CORE', APP.DS.'core'.DS);

require "../vendor/autoload.php";

$app = new ahmed\core\app;