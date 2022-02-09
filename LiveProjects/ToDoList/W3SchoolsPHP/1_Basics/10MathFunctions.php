<?php
echo(pi()); // returns 3.1415926535898


// The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
echo "<br>";
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo "<br>";
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
echo "<br>";
// The abs() function returns the absolute (positive) value of a number:
echo(abs(-6.7));  // returns 6.7
echo "<br>";
// The sqrt() function returns the square root of a number:
echo(sqrt(64));  // returns 8
echo "<br>";
// The round() function rounds a floating-point number to its nearest integer

echo(round(0.60));  // returns 1
echo "<br>";
echo(round(0.49));  // returns 0
echo "<br>";
// The rand() function generates a random number:
echo(rand());
echo "<br>";
echo(rand(1,27));

echo(pi()); // returns 3.1415926535898
?>