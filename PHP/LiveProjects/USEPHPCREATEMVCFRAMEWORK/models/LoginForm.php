<?php
/**
 * User : Sithembiso1370 ...
 * Class Register Models
 * @author Sithembiso Maphanga
 * @package app\models
 * @Date  : 06/02/2022
 * @Time : 14:15
 */ 

 namespace app\models;

use app\core\Application;
use app\core\Model;
 use app\core\DbModel;


 /**
* Class LoginForm
*
* @author Sithembiso Maphanga
* @package app\models
*/
class LoginForm extends Model{
    public string $email = '';
    public string $password ='';

    public static function tableName(): string
    {
        return 'users';
    }

    public function rules(): array
    {
        //  TODO : Implement some rules
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function login(){
        $user = User::findOne(['email' => $this->email]);

        if (!$user) {
            # code...
            $this->addError('email','User does not exist with this email address');
            return false;
        }


        if (!password_verify($this->password, $user->password)) {
            # code...
            $this->addError('password','Password is incorrect');
            return Application::$app->login($user);;
        }
        return 1;
    }

    public function labels(): array
    {
        return [
            'email' => 'Email',
            'password' => 'Password'
        ];
    }
}