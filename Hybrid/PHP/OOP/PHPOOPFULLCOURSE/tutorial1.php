<?php
/**
 * Title : PHP OOP FULL COURSE
 * DATE  : 23/12/2021
 * @Author : Sithembiso Maphanga
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

$tom = new Person('Tom','Ben','m');
$Njabulo = new Person('Njakes','kaBo Pinki','m');

echo $tom->firstname;
echo "<\n>";
echo $tom->lastname;
echo $tom->firstname;
echo "<\n>";
echo $tom->lastname;
echo "<\n>";
echo $tom->getGender();
echo "<\n>";
echo $tom->sayHello();
echo "<\n>";
echo $Njabulo->firstname;
echo "<\n>";
echo $Njabulo->sayHello();
echo "<\n>";


echo "<br>";
class Protecedextender extends Person {

    public function __construct($firstname,$lastname,$gender)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->gender = $gender;
        parent::__construct($this->firstname,$this->lastname,$this->gender);
        echo $this->getGender();
    }

    
}

$prtcted = new Protecedextender('Njakes','kaBo Pinki','m');



