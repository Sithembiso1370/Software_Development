<?php
// String
// A string is a sequence of characters, like "Hello world!".
// A string can be any text inside quotes. You can use single or double quotes:
echo '// String = "hey"<br>';
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo "<hr>";
// Integer
// An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
// Rules for integers:
// An integer must have at least one digit
// An integer must not have a decimal point
// An integer can be either positive or negative
// Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
// In the following example $x is an integer. The PHP var_dump() function returns the data type and value:
echo '// Integer = 12332322 <br>';
$x_int = 5985;
echo($x_int);
echo "<br>";
echo "<hr>";
// Float (floating point numbers - also called double)
// A float (floating point number) is a number with a decimal point or a number in exponential form.
// In the following example $x is a float. The PHP var_dump() function returns the data type and value:
echo '// Float (floating point numbers - also called double) =1/2 OR 0.23 practically decimals <br>';
$x_float = 10.365;
var_dump($x_float);
echo "<br>";
echo "<hr>";
// Boolean
echo '// Boolean = TRUE OR FALSE / 1 OR 0 <br>';
echo "<br>";
echo "<hr>";
// Array
// An array stores multiple values in one single variable.
// In the following example $cars is an array. The PHP var_dump() function returns the data type and value:
echo '//  Array =  <br>';
echo "<br>";
echo "<hr>";
// Object
// Classes and objects are the two main aspects of object-oriented programming.
// A class is a template for objects, and an object is an instance of a class.
// When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
// Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.
// When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

// If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
echo '// Object =  <br>';
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$my2ndCar = new Car("red", "Toyota");
echo $my2ndCar -> message();


echo "<br>";
echo "<hr>";
// NULL
// Null is a special data type which can have only one value: NULL.
// A variable of data type NULL is a variable that has no value assigned to it.
// Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
// Variables can also be emptied by setting the value to NULL:
echo '// NULL =  <br>';
echo "<br>";
echo "<hr>";
// Resource
echo '// Resource =  <br>';
// The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
// A common example of using the resource data type is a database call.
// We will not talk about the resource type here, since it is an advanced topic
echo "<br>";
echo "<hr>";

// Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

// Variables can also be emptied by setting the value to NULL:

// The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

// A common example of using the resource data type is a database call.

// We will not talk about the resource type here, since it is an advanced topic

?>


