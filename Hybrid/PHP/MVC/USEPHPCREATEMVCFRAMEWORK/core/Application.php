<?php
// require_once "Router.php";
namespace app\core;

// Entry Script of the Framework 
/**
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38


class Application extends Config{
    // PHP 7.4 TYPED PROPERTIES only work php 7.4 and above
    // UPGRADE TO PHP 7.4 and above FIRST
    public Router $router;
    public Request $request;


    // Create the constructor of the function
    public function __construct()
    {
        // Call the parent constructor
        parent::__construct();
        // Application needs to create an instance of the router
         
         $this->request = new Request();
         $this->router = new Router($this->request);
        // echo $this->router->getURL();request
    }

    public function run(){
        // echo $this->router->getURL();
        // to do:
        echo $this->router->resolve();

    }
}

// new Application();
// echo PHP_OS;