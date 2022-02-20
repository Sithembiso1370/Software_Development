<?php

// Sometimes you need to cast a numerical value into another data type.

// The (int), (integer), or intval() function are often used to convert a value to an integer.
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