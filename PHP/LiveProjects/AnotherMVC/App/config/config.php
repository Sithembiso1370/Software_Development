<?php 

echo 'config.pphp';

class Config{

    // Publicly available to call from other scripts
    public $name;
    // Protected to be only called/accesed/modified from this class and its extending classes only
    protected $age;
    // private and only modifiable in this class only
    private $surname;


    private function __construct()
    {
        echo 'config';
    }
}