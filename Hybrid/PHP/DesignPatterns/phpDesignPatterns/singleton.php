<?php


// Is like a global variable
// returns a single instance only

class Database {
    public static $instance;

    public static function getInstance(){
        Database::$instance = new Database();
        return Database::$instance;
    }


    private function __construct(){
        // private variables
    }


    // function to get data / return something
    public function getQuery(){
        return "SELECT * FROM some_tablez";
    }

}


$db = new Database;
echo $db->getQuery();


