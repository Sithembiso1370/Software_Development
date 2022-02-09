<?php
// require_once "Router.php";
namespace app\core;

use Responce;


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
    public Session $session;
    public Database $db;
    public ?DbModel $user;

    public Controller $controller ;

    // Create the constructor of the function that takes in the root path and enironment config variables 
    public function __construct($rootPath,array $config)
    {
        // Get Project Root Directory and make global singleton
        self::$ROOT_DIR = $rootPath;
        // Get application instance and make global singleton
        self::$app = $this;

        // Create an Instance of the Response
        $this->response = new Response();

        // Application needs to create an instance of the Request
         $this->request = new Request();

        //  Create an instance of the Session to call its constructor
        $this->session = new Session();

        //  Pass the instance of the Request to the Local Router
         $this->router = new Router($this->request, $this->response);


        //  Create an instance of the database inside the Application
         $this->db = new Database($config['db']);

        //  User::findOne();
    }

    public function run(){
        // echo $this->router->getURL();
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

    public function login(DbModel $user){
        $this->user = $user;
        $primarykey = $user->primaryKey() ;
        $primaryValue = $user->{$primarykey};
        $this->session->set('user', $primarykey);
    }


}
