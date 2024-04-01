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
define('APP', ROOT.DS.'app'.DS);
define('PUBLICE', ROOT.DS.'public'.DS);

define('VIEW', APP.DS.'views'.DS);
define('CONTROLLERS', APP.DS.'controllers'.DS);
define('MODEL', APP.DS.'models'.DS);
define('CORE', APP.DS.'core'.DS);

require "../vendor/autoload.php";
use ahmed\core\app;
$app = new app;