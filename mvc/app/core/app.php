<?php
class app{

    private $controller;
    private $method;
    private $params = [];

    public function __construct(){
        $this->url();
        $this->render();
    }

    private function url(){
        if(!empty($_SERVER['QUERY_STRING'])){
            $url = $_SERVER['QUERY_STRING'];
            $url = explode('/', $url);

            $this->controller = isset($url[0]) ? $url[0].'Controller' : 'homeController';
            $this->method = isset($url[1]) ? $url[1] : 'index';
            unset($url[0], $url[1]);
            $this->params = !empty($url) ? array_values($url) : [];
            print_r ($this->params);
        }
    }

    private function render(){
        $controller = $this->controller.'Controller';
        $method = $this->method;
        $params = $this->params;

        if(class_exists($controller)){
            $controller = new $controller;

            if(method_exists($controller, $method)){
                call_user_func_array([$controller, $method], $params);
            }else{
                echo "Method not found";
            }
        }
    }

    
}