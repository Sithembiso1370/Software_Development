<?php
// sytanax $exp = "/stringexpertofind/i";

// The preg_match() function will tell you whether a string contains matches of a pattern
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Outputs 1


// The preg_match_all() function will tell you how many matches were found for a pattern in a string.
echo "<br>";
$str2 = "The rain in SPAIN falls mainly on the plains.";
$pattern2 = "/ain/i";
echo preg_match_all($pattern2, $str2); // Outputs 4


// The preg_replace() function will replace all of the matches of the pattern in a string with another string
$str3 = "Visit Microsoft!";
$pattern3 = "/microsoft/i";
echo preg_replace($pattern3, "W3Schools", $str3); // Outputs "Visit W3Schools!"

// You can use parentheses ( ) to apply quantifiers to entire patterns. They also can be used to select parts of the pattern to be used as a match.
$str4 = "Apples and bananas.";
$pattern4 = "/ba(na){2}/i";
echo preg_match($pattern4, $str4); // Outputs 1
?>