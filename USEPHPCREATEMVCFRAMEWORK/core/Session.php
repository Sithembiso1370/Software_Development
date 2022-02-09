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
        // echo '<pre>';
        // var_dump($_SESSION[self::FLASH_KEY]);
        // echo '</pre>';

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

    public function __destruct()
    {
        // Iterate over marked to be removeds
        $flashMessages = $_SESSION[self::FLASH_KEY] ?? [];

        // Unset each flash message that has been marked to be removed
        foreach ($flashMessages as $key => &$flashMessage) {
            # Mark to be removed 
            if ($flashMessage['remove']) {
                # code...
                unset($flashMessages[$key]);
            }
        }

        $_SESSION[self::FLASH_KEY] = $flashMessages;

    }

    public function set(){
        
    }
 }