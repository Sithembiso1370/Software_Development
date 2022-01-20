<?php
// require_once "Router.php";
namespace app\core;

use Responce;

// Entry Script of the Framework 
/**
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38


class Application {
    public static string $ROOT_DIR;
    public static Application $app;
    // PHP 7.4 TYPED PROPERTIES only work php 7.4 and above
    // UPGRADE TO PHP 7.4 and above FIRST
    public Router $router;
    public Request $request;
    public Response $response;

    public Controller $controller ;

    // Create the constructor of the function
    public function __construct($rootPath)
    {
        // Get Project Root Directory and make global singleton
        self::$ROOT_DIR = $rootPath;
        // Get application instance and make global singleton
        self::$app = $this;

        // Create an Instance of the Responce
        $this->response = new Response();

        // Application needs to create an instance of the Request
         $this->request = new Request();

        //  Pass the instance of the Request to the Local Router
         $this->router = new Router($this->request, $this->response);
    }

    public function run(){
        // echo $this->router->getURL();
        // to do:
        echo $this->router->resolve();

    }

/*
* @return \app\core\Controller
*/
    public function getController(): \app\core\Controller
    {
        return $this->controller;
    }


    /*
    * @param \app\core\Controller $controller
    */
    public function setController(\app\core\Controller $controller): void
    {
        $this->controller = $controller;
    }


}
