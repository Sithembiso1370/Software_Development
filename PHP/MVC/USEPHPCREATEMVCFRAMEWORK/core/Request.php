<?php
/**
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 15/12/2021
 */ #Time : 18:38


 
 namespace app\core;
// @author Sithembiso Maphanga
// @package app\core


// Class that deals with requests
class Request {

    // Method/Function to Get the Current Path from the URL
    public function getPath(){

        // Getting and storing the path variable 
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        // Check if the url has parameters after a question mark
        // Get the position  of the ?
        $position = strpos($path,'?');

        // If the url does not have other parameters after a question mark 
        if($position === false){
            // Return the whole path
            return $path;
        }

        // RETURN THE SUBSTRING OF THE PATH FROM POSITION 0 UP UNTILL THE POSITION WHERE THE ? WAS FOUND
        // and leave the extra parameters for now
        return substr($path,0,$position);
        // return $path;

    }

    // To distinguid between get requests and Post requests
    public function getMethod(){
        return  strtolower($_SERVER['REQUEST_METHOD']);
    }

    // Adding my own function to have the request attributes at glance
    public function getRequest(){
        return $_SERVER;
    }
}