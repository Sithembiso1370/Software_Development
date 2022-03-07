<?php


class Routermaster
{
    private $router;
    
    public function __construct()
    {
        
    }

    public function get_route(){
        return $_SERVER["REQUEST_URI"];
    }
}
