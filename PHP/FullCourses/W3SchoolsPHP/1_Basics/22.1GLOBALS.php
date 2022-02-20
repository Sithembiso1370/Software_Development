<?php

// $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).

// PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

// The example below shows how to use the super global variable $GLOBALS:
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
?>