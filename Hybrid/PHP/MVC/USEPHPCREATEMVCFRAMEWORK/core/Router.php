<?php

/**
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38


 // @author Sithembiso Maphanga
// @package app\core
namespace app\core;



class Router {
     public Request $request;
     protected array $routes = [];

        // Create the constructor of the function
    public function __construct(\app\core\Request $request)
    {
    
        // $this->uri = $_SERVER["REQUEST_URI"];
        // echo "url is ".$_SERVER;
        $this->request = $request;

    }

    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }

    // public function getURL(){
    //     return $this->uri;
    // }

    public function resolve(){
        // var_dump($_SERVER);
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        // $full_request = $this->request->getRequest();

        if ($callback === false) {
            # code...
            // Render the default view
            return $this->renderView('home');
        }

        // CHECK IF THE CALLBACK IS OFF STRING TYPE
        if (is_string($callback)) {
            # code...
            // Render the the view passed in
            return $this->renderView($callback);
        }   
        // echo call_user_func($callback);
        return call_user_func($callback);
    }

    public function renderView($view){
            // INCLUDE THE VIEW
            include_once __DIR__.'/../vendor/views/'.$view.'.php';
    }
 }