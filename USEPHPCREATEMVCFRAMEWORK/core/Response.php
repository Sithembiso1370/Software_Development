<?php
/**
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 07/01/2022
 */ #Time : 18:38

 namespace app\core;


class Response {
    public function setStatusCode(int $Code){
        http_response_code($Code);
    }
}