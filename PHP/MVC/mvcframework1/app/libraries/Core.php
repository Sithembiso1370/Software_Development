<?php 

// core app class

class Core {
    // holds the value of the current controller employed
    protected $currentController = 'Pages';
    // holds the value of the current method employed
    protected $currentMethod = 'index';
    // holds the value of the current url parameters
    protected $params = [];

    // Create the constructor of the class
    public function __construct(){
        print_r($this->getUrl());
    }


    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');

            // filture the url as a string/number
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // convert the string array into an array 
            $url = explode("/",$url);

            // return the url array
            return $url;
        }
    }


}