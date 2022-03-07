<?php

/**
 * User : Sithembiso Maphanga
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 05/02/2022
 */ #Time : 21:27

 namespace app\core;

 class Session {
     protected const FLASH_KEY = 'flash_messages';


    public function __construct()
    {
        session_start();
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];

        // Mark Messages to be removed at the destructor/at the end of the request
        foreach ($flashMessages as $key => &$flashMessage) {
            # Mark to be removed 
            $flashMessage['remove'] = true;
        }

        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }

    public function setFlash($key, $message){

        $_SESSION[self::FLASH_KEY][$key] = [
            'remove' => false,
            'value' => $message
        ] ;
    }


    public function getFlash($key){
        return $_SESSION[self::FLASH_KEY][$key]['value'] ?? false;
    }


    public function set($key, $value){
        $_SESSION[$key] = $value;
    }

    public function get($key)
    {
        return $_SESSION[$key] ?? false;
    }

    public function remove($key)
    {
        unset($_SESSION[$key]);
    }

    public function __destruct()
    {
        $this->removeFlashMessages();
    }

    private function removeFlashMessages()
    {
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];
        foreach ($flashMessages as $key => $flashMessage) {
            if ($flashMessage['remove']) {
                unset($flashMessages[$key]);
            }
        }
        $_SESSION[self::FLASH_KEY] = $flashMessages;
    }


 }