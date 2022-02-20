<!-- 
    AUTHOR : Sithembiso Maphanga
    DATE : 20/12/2021
    Purpose : Gain Understanding of PHP CORE Concepts
 -->
<!DOCTYPE html>
<html>
<body>
<?php
echo "Hello World!";
echo '<br>';

$color = "red";
echo "My car is <h1>" . $color . "</h1><br>";
// echo "My house is " . $COLOR . "<br>";
// echo "My boat is " . $coLOR . "<br>";
echo '<br>';
echo '<hr>';
echo '<br>';
echo 'In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
In the example below, all three echo statements below are equal and legal:<br>';
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
echo "Note: However; all variable names are case-sensitive! :<br>";
echo 'Look at the example below; only the first statement will display the value of the $color variable! 
This is because $color, $COLOR, and $coLOR are treated as three different variables:';
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

?>

</body>
</html