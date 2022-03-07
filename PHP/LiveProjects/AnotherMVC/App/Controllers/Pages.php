<?php

// echo 'PAGES CONTROLLELR';

class Pages {

    public function __construct()
    {
        require dirname(__DIR__).'/Models/model.php';
        // Create an instance of the model
        // echo 'PAGES CONTOLLER';
    }

    // Call an instance of the view and pass it the model
    public function index(){
        echo __DIR__ ;
        
    }

    public function phpoopfullcourse(){

    }

}