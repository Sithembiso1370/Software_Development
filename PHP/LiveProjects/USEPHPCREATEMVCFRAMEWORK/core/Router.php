<?php

/**
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38

namespace app\core;

use app\core\exception\NotFoundException;


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
        if (!$callback) {
            throw new NotFoundException();
        }

        // CHECK IF THE CALLBACK IS OFF STRING TYPE
        if (is_string($callback)) {
            // Render the the view passed in
            return $this->renderView($callback);
        }

        // CHECK IF THE CALLBACK IS OFF Array TYPE and get the first indexed item
        
        if (is_array($callback)) {
            /**
             * @var $controller \app\core\controller
             */
            $controller = new $callback[0];
            $controller->action = $callback[1];
            Application::$app->controller = $controller;
            $middlewares = $controller->getMiddlewares();
            foreach ($middlewares as $middleware) {
                $middleware->execute();
            }
            $callback[0] = $controller;
        }



        // echo call_user_func($callback);
        return call_user_func($callback, $this->request, $this->response);
    }

    public function renderView($view,$params = []){
        return Application::$app->view->renderView($view, $params);
    }

    // // DESIGN Lyout
    public function renderViewOnly($view, $params = []){
        return Application::$app->view->renderViewOnly($view, $params);
    }
 }