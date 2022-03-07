<?php

$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}

myTest();
echo "A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:";
echo "<p>Variable x outside function is: $x</p>";

// -----------------------------------------------------------
function myTest1() {
  $x1 = 5; // local scope
  echo "<p>Variable x inside function is: $x1</p>";
}
myTest1();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x1</p>";

// -------------------------------------------------------------------------------
// PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

// The example above can be rewritten like this:
$x2 = 5;
$y2 = 10;

function myTest3() {
  global $x2, $y2;
  $y2 = $x2 + $y2;
}

myTest3();
echo $y2; // outputs 15


// ////////////////////////// static variables

// Normally, when a function is completed/executed, all of its variables are deleted.
//  However, sometimes we want a local variable NOT to be deleted. 
// We need it for a further job.

function myTest22() {
  static $x = 0;
  echo 'static x = '.$x.'<br>';
  $x++;
}

myTest22();
myTest22();
myTest22();

// Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.
// Note: The variable is still local to the function.

?>