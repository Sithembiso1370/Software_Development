<?php

// URL EXAMPLE : http://localhost:8080/admin/users/add?xx=3&b-4
class Request {

    public function __construct()
    {
        // echo 'Request';
        // echo $this->retURL();
    }

    private function getURL(){
        return $_SERVER['REQUEST_URI']  ;
    }

    public function retURL(){
        $url = $this->getURL();
        return $url;
    }


}