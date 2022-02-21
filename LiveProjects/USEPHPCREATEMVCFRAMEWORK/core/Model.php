<?php


/**
 * @author Sithembiso Maphanga
 * @package app\core
 * @Date  : 27/01/2022
 */ #Time : 16:05

namespace app\core;


 abstract class Model{

    public const RULE_REQUIRED = 'required';
    public const RULE_EMAIL = 'email';
    public const RULE_MIN = 'min';
    public const RULE_MAX = 'max';
    public const RULE_MATCH = 'match';
    public const RULE_UNIQUE = 'unique';

    public function loadData($data)
    {
        foreach ($data as $key => $value) {
            # code...
            if (property_exists($this,$key)) {
                # code...
                $this->{$key} = $value;
            }
        }

    }

    abstract public function rules(): array;

    public function labels()
    {
        return [];
    }

    public function getLabel($attribute){
        return $this->labels()[$attribute] ?? $attribute;
    }

    public array $errors = [];

    public function attributes()
    {
        return [];
    }


    public function validate(){
        foreach ($this->rules() as $attribute => $rules) {
            # code...
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                # code...
                $ruleName = $rule;

                // Apply the rules for all form fealds
                if (!is_string($ruleName)) {
                    # code...
                    $ruleName = $rule[0];
                }
                if ($ruleName == self::RULE_REQUIRED && !$value) {
                    # code...
                    $this->addErrorForRule($attribute, self::RULE_REQUIRED);
                }
                if ($ruleName === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->addErrorForRule($attribute, self::RULE_EMAIL);
                }
                if ($ruleName === self::RULE_MIN && strlen($value) < $rule['min']) {
                    $this->addErrorForRule($attribute, self::RULE_MIN, ['min' => $rule['min']]);
                }
                if ($ruleName === self::RULE_MAX && strlen($value) > $rule['max']) {
                    $this->addErrorForRule($attribute, self::RULE_MAX);
                }
                if ($ruleName === self::RULE_MATCH && $value !== $this->{$rule['match']}) {
                    $rule['match'] = $this->getLabel($rule['match']);
                    $this->addErrorForRule($attribute, self::RULE_MATCH, ['match' => $rule['match']]);
                }
                if ($ruleName === self::RULE_UNIQUE) {
                    $className = $rule['class'];
                    $uniqueAttr = $rule['attribute'] ?? $attribute;
                    $tableName = $className::tableName();
                   $statement = Application::$app->db->prepare("SELECT * FROM $tableName WHERE $uniqueAttr = :attr");
                    $statement->bindValue(":attr", $value);
                    $statement->execute();
                   $record =  $statement->fetchObject();

                   if ($record) {
                       # code...
                       $this->addErrorForRule($attribute,self::RULE_UNIQUE, ['field' => $this->getLabel($attribute)]);
                   }
                }

            }
        }

        return empty($this->errors);
    }


    private function addErrorForRule(string $attribute, string $rule, $params =[]){

        $message = $this->errorMessages()[$rule] ?? '';
        foreach ($params as $key => $value) {
            # code...
            $message = str_replace("{{$key}}",$value,$message);
        }
        $this->errors[$attribute][] = $message;
    }

    public function errorMessages(){
        return [
            self::RULE_REQUIRED => 'This field is required',
            self::RULE_EMAIL => 'This field must be valid email address',
            self::RULE_MIN => 'Min length of this field must be {min}',
            self::RULE_MAX => 'Max length of this field must be {max}',
            self::RULE_MATCH => 'This field must be the same as {match}',
            self::RULE_UNIQUE => 'Record with with this {field} already exists',
        ];
    }

    public function hasError($attribute){
        return $this->errors[$attribute] ?? false;
    }

    public function getFirstError($attribute){
        return $this->errors[$attribute][0] ?? false;
    }

    public function addError(string $attribute, string $message){
        $this->errors[$attribute][] = $message;
    }


 }