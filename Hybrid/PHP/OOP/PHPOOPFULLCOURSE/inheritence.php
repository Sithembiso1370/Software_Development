<?php
/**
 * Title : PHP OOP FULL COURSE INHERITANCE
 * DATE  : 23/12/2021
 * @Author : Sithembiso Maphanga
 * TIME : 15:47
 */
// Class
class Person {
    // Can be called/accessed and modified within and outside the scope of this class
    public $firstname;
    // Can be called/accessed and modified Only within this class and its extending classes
    protected $lasttname;
    // Can only be called/accessed and modified within the scope of this function
    private $gender;

    public function __construct($firstname,$lastname,$gender)
    {
        // Getting the parameters passed into the constructor to the class environment
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->gender = $gender;
        
    }

    public function sayHello(){
        return "Hello my name is :".$this->firstname;
    }

    public function getGender(){
        return $this->gender;
    }
}