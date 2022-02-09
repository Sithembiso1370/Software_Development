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


 use app\core\Model;
 use app\core\DbModel;


 /**
* Class Database
*
* @author Sithembiso Maphanga
* @package app\models
*/
class User extends DbModel{
    

    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirm = '';
    public string $file = '';

    public static function tableName(): string
    {
        return 'User ';
    }


    public function register(){
        echo 'Creating new user';
    }

    public function rules(): array
    {
        //  TODO : Implement some rules
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_UNIQUE, 'class' => self::class]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]],
            'passwordConfirm' => [[self::RULE_MATCH, 'match' => 'password']],
        ];
    }


    public function attributes(): array
    {
        return ['firstname','email','password'];
    }
}