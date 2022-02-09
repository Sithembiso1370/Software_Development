<?php

// The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.
// This example skips the value of 4:
$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}


while($x < 10) {
    if ($x == 6) {
      $x++;
      continue;
    }
    echo "The number is: $x <br>";
    $x++;
  }
?>