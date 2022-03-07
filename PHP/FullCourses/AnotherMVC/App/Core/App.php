<?php

// echo dirname(__DIR__);
// C:\xampp\htdocs\PHP\PHPOOPFULLCOURSE\App

class App {

    private $route;
    private $controller;
    private $modelandparams = [];
    private $view;
    private $ControllerInstance;
    public $action ;


    public function __construct()
    {
        $this->route = $this->getURL();
        // echo $this->route;
        $this->navigateUser();
    }




    public function getURL(){
        // GET THE file to fetch the URL
        require dirname(__DIR__).'/Helpers/Router.php';

        // Create an instance of the route master
        $route = new Routermaster();

        return $route->get_route();
    }


    public function navigateUser(){

        // return count(explode('/',$this->getURL()));
        // return explode('/',$this->getURL())[1];

        
        if (file_exists(dirname(__DIR__).'/Controllers/'.explode('/',$this->route)[1].'.php')) {
            # code...
            $this->controller = ucfirst(explode('/',$this->route)[1]) ;
            require dirname(__DIR__).'/Controllers/'.$this->controller.'.php';
            
            // INSTANCIATE THE CLASS
            $this->ControllerInstance = new $this->controller;

            // FOR THE VIEW
            // Check if the view method exists in the above class
            if (method_exists($this->controller,ucfirst(explode('/',$this->route)[2]))) {
                # code...
                $this->view = ucfirst(explode('/',$this->route)[2]).'()';
            }
            else {
                # code...
                // echo 'view not acoounted for';
                $this->view = 'index';
            }

            // FOR THE VIEWS MODEL
        }
        else {
            $this->controller = 'Error.php';
            require dirname(__DIR__).'/Controllers/'.$this->controller.'.php';

            // INSTANCIATE THE CLASS
            // $ControllerInstance = new $this->controller;
        }

        call_user_func(array($this->ControllerInstance , $this->view));
        // Execute the controllers method
        // $this->ControllerInstance->index();
        
    }









    public function getsumthin($sumthin){
        echo 'geting'.$sumthin;
    }

    public function setsumthin($sumthin, $value){
        echo 'seting'.$sumthin.' to ='.$value;
    }

    public function requiresumthin($sumthin){
        echo 'seting'.$sumthin;
    }
}