<?php

/**
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38

namespace app\core;

class Router {
     public Request $request;
     public Response $response;
     protected array $routes = [];

    /**
     * Router Constructor
     * @param \app\core\Request $request
     * @param \app\core\Response $response
     */

    // Create the constructor of the function
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    // Configure method to get path on Form "GET" URL changes/
    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }


    // Configure method to get path on Form "POST" URL changes
    public function post($path, $callback){
        $this->routes['post'][$path] = $callback;
    }


    // Process the input and return and output to the user
    public function resolve(){
        // var_dump($_SERVER);
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;
        // $full_request = $this->request->getRequest();

        if ($callback === false) {
            # code...
            $this->response->setStatusCode(404);
            // Render the default view
            return $this->renderErrorContent('404');
            // return "Not Found";
        }

        // CHECK IF THE CALLBACK IS OFF STRING TYPE
        if (is_string($callback)) {
            // Render the the view passed in
            return $this->renderView($callback);
        }

        // CHECK IF THE CALLBACK IS OFF STRING TYPE
        if (is_array($callback)) {
            # code...
            // Render the the view passed in
            Application::$app->controller = new $callback[0]();

            $callback[0] = Application::$app->controller;
        }



        // echo call_user_func($callback);
        return call_user_func($callback, $this->request);
    }

    public function renderView($view,$params = []){
        $layoutContent = $this->layoutContent();
        // $viewContent = $this->renderViewOnly($view);
        $headerContent = $this->renderHeaderOnly($view);
        $body = $this->renderbodyOnly($view,$params);
        $footer = $this->renderfooterOnly();

        // Replace Content Tags
        // Replace Header
        $Content = str_replace("{{nav}}", $headerContent,$layoutContent);
        // Repace Content
        $Content = str_replace("{{content}}",$body ,$Content);
        // Repace Footer
        $Content = str_replace("{{footer}}",$footer,$Content);
        // $Content = 
        // return str_replace("{{content}}",$viewContent,$layoutContent);
        return $Content;
    }

    // DESIGN Lyout
    public function renderViewOnly($view){
        ob_start();
        // INCLUDE THE VIEW
        include_once Application::$ROOT_DIR.'./vendor/views/'.$view.'.php';
        return ob_get_clean(); 
    }

    public function layoutContent(){

        $layout = Application::$app->controller->layout;
        ob_start();
        // INCLUDE THE VIEW
        include_once Application::$ROOT_DIR.'./vendor/views/layouts/'.$layout.'.php'; 
        return ob_get_clean(); 
    }

    public function renderHeaderOnly($view){

        if ($view == 'home') {
            # code...
            ob_start();
            // INCLUDE THE VIEW
            include_once Application::$ROOT_DIR.'./vendor/views/layoutComponents/header1.php'; 
            return ob_get_clean(); 
        }
        else{
            ob_start();
            // INCLUDE THE VIEW
            include_once Application::$ROOT_DIR.'./vendor/views/layoutComponents/header.php'; 
            return ob_get_clean(); 
        }
    }

    public function renderbodyOnly($Content,$params){
        // Iterate over the params
        foreach ($params as $key => $value) {
            # code...
            $$key = $value;
        }

        // The include will see the above variables

        ob_start();
        // INCLUDE THE VIEW
        include_once Application::$ROOT_DIR.'./vendor/views/'.$Content.'.php'; 
        return ob_get_clean(); 
    }

    public function renderfooterOnly(){
        ob_start();
        // INCLUDE THE VIEW
        include_once Application::$ROOT_DIR.'./vendor/views/layoutComponents/footer.php'; 
        return ob_get_clean(); 
    }


    public function rendererror($error){
        ob_start();
        // INCLUDE THE VIEW
        include_once Application::$ROOT_DIR.'./vendor/views/layoutComponents/'.$error.'.php'; 
        return ob_get_clean(); 
    }

    public function renderErrorContent($viewContent){
        $layoutContent = $this->layoutContent();
        // $viewContent = $this->renderViewOnly($view);
        $headerContent = $this->renderHeaderOnly($viewContent);
        $body = $this->rendererror($viewContent);
        $footer = $this->renderfooterOnly();

        // Replace Content Tags
        // Replace Header
        $Content = str_replace("{{nav}}", $headerContent,$layoutContent);
        // Repace Content
        $Content = str_replace("{{content}}",$body ,$Content);
        // Repace Footer
        $Content = str_replace("{{footer}}",$footer,$Content);
        // $Content = 
        // return str_replace("{{content}}",$viewContent,$layoutContent);
        return $Content;
    }


 }