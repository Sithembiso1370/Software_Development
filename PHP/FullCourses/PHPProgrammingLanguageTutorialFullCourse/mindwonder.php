<?php


      // The echo function can render php content on  the html document widget it is executed on
      echo ('<h1>Sthe"s site</h1>');
      echo '<hr>';
      echo ('<p>Sthe"s site</p>');

      echo '<br>';
      echo '<h2 align="center">--------------Variables-----------</h1>';

      
      // strings
      $phrase = "To be on not to be";
      echo $phrase;
      echo '<br>';
      // variables
      $age = 27;
      echo $age;
      echo '<br>';
      // floats 
      $gpa = 30.39;
      echo $gpa;
      echo '<br>';
      // boolean
      $ismale = True;
      echo $ismale;
      echo '<br>';
      // No value 
      $no_value = null;
      echo $no_value;
      echo '<br>';

      echo '<br>';
      echo '<h2 align="center">--------------Functions-----------</h1>';
      // functions
      // function closer
      $myfunct =  function (){
          return 'hello my funct';
      };
      echo $myfunct();
      echo '<br>';

      // functions with params
      // function closer with params
      $myfunctwithparams =  function ($name){
          return 'hello my name is '.$name.' and this is my funct';
      };
      echo $myfunctwithparams('Sithembiso');
      echo '<br>';

      echo '<br>';
      echo '<h2 align="center">--------------Classes-----------</h1>';
      // Classes
      // Classes
      class RandomClass {
          public $classname;
          protected $purposeOfThis;
          private $Todo = [];

          public function __construct()
          {
              $this->classname = 'Random Class';
              $this->purposeOfThis = 'Play with PHP';
              // $this->Todo.
              for ($i=0; $i < 5; $i++) { 
                  # code...
                  array_push($this->Todo,$i);
              }
              return $this->Todo;
          }

      }
      $myClass =  new RandomClass();
      echo($myClass->classname);
      echo '<br>';

      // Class with Params
      // Class with Params extending
      class RandomClasswithparamsExtending extends RandomClass{
          public $classnamez;
          protected $purposeOfThisz;
          private $Todoz = [];

          public function __construct($classname,$purposeOfThis,$Todo)
          {
              parent::__construct();
              $this->classnamez = $classname;
              $this->purposeOfThisz = $purposeOfThis;
              // $this->Todo.
              for ($i=0; $i < 5; $i++) { 
                  # code...
                  array_push($this->Todoz,$Todo);
              }
              return $this->Todoz;
          }

          public function __get($name)
          {
              return $this->$name;
          }

          public function __set($name, $value)
          {
              $this->$name = $value;
          }

      }

      echo '<br>';
      echo '<h2 align="center">--------------Objects-----------</h1>';
      // Objects
      $myClasswithpramasext =  new RandomClasswithparamsExtending('R&D','Mastering classes',['hello',22,True]);
      echo($myClasswithpramasext->classname);
      echo '<br>';
      // var_dump($myClasswithpramasext->Todo);
      // echo '<br>';
      var_dump($myClasswithpramasext->__get('Todoz'));
      var_dump($myClasswithpramasext->__set('Todoz',['Practice PhP','aNDROID']));
      var_dump($myClasswithpramasext->__get('Todoz'));
      echo '<br>';