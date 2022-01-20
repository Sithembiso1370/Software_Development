<?php

// This is how it works: First we have a single expression n (most often a variable), 
// that is evaluated once. The value of the expression is then compared with the values 
// for each case in the structure. If there is a match, the block of code associated 
// with that case is executed. Use break to prevent the code from running into 
// the next case automatically. The default statement is used if no match is found
$favcolor = "blue";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>