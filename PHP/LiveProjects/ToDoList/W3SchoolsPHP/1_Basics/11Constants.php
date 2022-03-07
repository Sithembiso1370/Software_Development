<?php
// name: Specifies the name of the constant
// value: Specifies the value of the constant
// case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false


// A valid constant name starts with a letter or underscore (no $ sign before the constant name).
// Constants are automatically global and can be used across the entire script.


// String constant
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<br>";
// Array constant
// In PHP7, you can create an Array constant using the define() function.
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
  echo '<br>';

// Constants are automatically global and can be used across the entire script.
  function myTest() {
    echo cars[0];
  }
   
  myTest();

  
?>