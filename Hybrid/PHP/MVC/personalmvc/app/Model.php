<?php

class Model{

    public function __construct($name)
    {
        return $this->getmodel($name);
    }

    public function getmodel($name){
        require_once dirname(__DIR__).'/app/'.$name.'.php';
        $name = ucfirst($name);
        return new $name();
    }
}