<?php
/**
 * User : Sithembiso1370 ...
 * Class Register Models
 * @author Sithembiso Maphanga
 * @package app\models
 * @Date  : 22/01/2022
 * @Time : 20:17
 */ 

 namespace app\models;
 use app\core\Model;

class LoginModel extends Model{
    

    public string $firstname;
    public string $password;



    public function login(){
        // echo 'Loging in new user';
        return 1;
    }

    public function labels()
    {
        return [
            'email' => 'Your Email address',
            'password' => 'Password'
        ];
    }

    public function rules(): array
    {
        //  TODO : Implement some rules
        return [
            'firstname' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]]
        ];
    }
}