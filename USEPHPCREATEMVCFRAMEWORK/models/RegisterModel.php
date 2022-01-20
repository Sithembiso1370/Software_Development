<?php
/**
 * User : Sithembiso1370 ...
 * Class Register Models
 * @author Sithembiso Maphanga
 * @package app\models
 * @Date  : 19/01/2022
 * @Time : 20:17
 */ 

 namespace app\models;


class RegisterModel {
    

    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $passwordconfirm;


    public function __construct()
    {
        // echo 'Register Model';
        if (isset($_POST['firstname'])) {
            # code...
            // echo $_POST['firstname'];
        }
    }
}