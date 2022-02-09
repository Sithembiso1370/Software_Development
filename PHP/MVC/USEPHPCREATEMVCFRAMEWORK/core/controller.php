<?php
// require_once "Router.php";
namespace app\core;

// Entry Script of the Framework 
/**
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38


 class Controller {

    public string $layout = 'main';

    public function render($view,$params = []){
        return Application::$app->router->renderView($view,$params);
    } 

    public function setLayout($layout){
        $this->layout = $layout;
    }

 }