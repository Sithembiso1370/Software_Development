<?php
/**
 * User : Sithembiso1370 ...
 * @author Sithembiso Maphanga
 * @package app\core
 * @Class Name : Config
 * @Date  : 16/12/2021
 *  * @Time : 12:03
 */  

 namespace app\core;



 class Config {
     private $title ;
    public function __construct()
    {
        $this->title = "Title";
    }

    public function returntitle(){
        return $this->title;
    }
 }
?>