<?php
/**
 * User : Sithembiso1370 ...
 * Class Register Models
 * @author Sithembiso Maphanga
 * @package app\models
 * @Date  : 27/02/2022
 * @Time : 19:15
 */ 

 namespace app\models;

use app\core\Application;
use app\core\FormModel;
use app\core\Model;


 /**
* Class LoginForm
*
* @author Sithembiso Maphanga
* @package app\models
*/
class ContactForm extends FormModel{
    public string $subject = '';
    public string $email ='';
    public string $body = '';

    public static  function primarykey(): string
    {
        return 'id';
    }


    public static function tableName(): string
    {
        return 'contactmessages';
    }

    public function rules(): array
    {
        //  TODO : Implement some rules
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED]
        ];
    }

    public function send(){
        return parent::save();
    }

    public function attributes(): array
    {
        return ['subject','email','body'];
    }



    public function labels(): array
    {
        return [
            'subject' => 'Enter Subject',
            'email' => 'Enter Email',
            'body' => 'Body'
        ];
    }

    public function getDisplayName(): string
    {
        return $this->email . ' ' . $this->body;
    }
}