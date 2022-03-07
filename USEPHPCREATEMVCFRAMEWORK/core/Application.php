<?php
// require_once "Router.php";
namespace app\core;

use app\core\Response;
use app\models\ContactForm;

/**
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38


class Application {
    const EVENT_BEFORE_REQUEST = 'beforeRequest';
    const EVENT_AFTER_REQUEST = 'afterRequest';

    public static string $ROOT_DIR;
    public static Application $app;
    // PHP 7.4 TYPED PROPERTIES only work php 7.4 and above
    // UPGRADE TO PHP 7.4 and above FIRST
    public Router $router;
    public Request $request;
    public string $layout = 'main';
    public string $userClass;
    public Response $response;
    public Session $session;
    public Database $db;
    public ?userModel $user;
    public ?Controller $controller = null;
    public View $view;

    // Create the constructor of the function that takes in the root path and enironment config variables 
    public function __construct($rootPath,array $config)
    {

        $this->userClass = $config['userClass'];
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

         $this->view = new View();

         $userId = $this->session->get('user');
         if ($userId) {
             $key = $this->userClass::primaryKey();
             $this->user = $this->userClass::findOne([$key => $userId]);
         }
         else{
            $this->user = null;
         }
    }

    public function run(){
        $this->triggerEvent(self::EVENT_BEFORE_REQUEST);
        try {
            echo $this->router->resolve();
        } catch (\Exception $e) {
            echo Application::$app->view->renderView('_error', [
                'exception' => $e,
            ]);
        }
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
        $this->session->set('user', $primaryValue);
        return true;
    }

    public function sendForm(DbModel $contactForm){
        $this->user = $contactForm;
        if (!$this->user) {
            # code...
            return false;
        }
        
        $this->session->set('form', $contactForm);
        return true;
    }

    public static function isGuest()
    {
        return !self::$app->user;
    }

    
    public function triggerEvent($eventName)
    {
        $callbacks = $this->eventListeners[$eventName] ?? [];
        foreach ($callbacks as $callback) {
            call_user_func($callback);
        }
    }

    public function on($eventName, $callback)
    {
        $this->eventListeners[$eventName][] = $callback;
    }


}
