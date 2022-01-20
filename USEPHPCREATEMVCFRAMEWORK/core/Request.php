<?php
/**
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 07/01/2022
 */ #Time : 18:38


namespace app\core;

class Request {

    // Returns the path passed the headers up to the question mark
    public function getPath(){
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        $position = strpos($path,'?');

        if ($position == false) {
            # code...
            return $path;
        }

        return substr($path,  0, $position);
    }




    // Returns the type of method that was propagated to headers
    public function method(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }



    // Gets the Sent parameters on GET AND POST of data to the server
    public function getBody(){
        $body = [];

        // Do this if the method is get
        if($this->method() === 'get'){
            foreach ($_GET as $key => $value) {
                # code...
                // Sanitize the data
                $body[$key] = filter_input(INPUT_GET,$key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        // Do this if the method is POST
        if($this->method() === 'post'){
            foreach ($_POST as $key => $value) {
                # code...
                // Sanitize the data
                $body[$key] = filter_input(INPUT_POST,$key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        // Return the Created body
        return $body;
    }




    // Checks if the method is of GET type
    public function isGet(){
        return $this->method()  === 'get';
    }


    // Checks if the method is of POST type
    public function isPost(){
        return $this->method()  === 'post';
    }



}