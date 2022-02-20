<?php

// So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. 
// Then, if you assign a string to the same variable, the type will change to a string.
// This automatic conversion can sometimes break your code.
// Integers
$x = 5985;
var_dump(is_int($x));

$x1 = 59.85;
var_dump(is_int($x1));

// PHP Floats
$x2 = 10.365;
var_dump(is_float($x2));

// Infinity
$x3 = 1.9e411;
var_dump($x3);

// NaN stands for Not a Number.

// The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.

// $x = 5985;
// var_dump(is_numeric($x));

// $x = "5985";
// var_dump(is_numeric($x));

// $x = "59.85" + 100;
// var_dump(is_numeric($x));

// $x = "Hello";
// var_dump(is_numeric($x));

// TYPE CASTING 
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>