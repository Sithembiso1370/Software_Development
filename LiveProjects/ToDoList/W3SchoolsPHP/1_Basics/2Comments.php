<!DOCTYPE html>
<html>
<body>

<?php
// This is a single-line comment
echo "<br>";
echo "<hr>";
echo "//1. This is a single-line comment <br>";

# This is also a single-line comment
echo "#2. This is also a single-line comment <br>";

/**
 * THIS IS A MULTILINE COMMENT
 */
echo '/**<br>
*3. THIS IS A MULTILINE COMMENT <br>
*/ <br>';

echo '// You can also use comments to leave out parts of a code line <br>';
// You can also use comments to leave out parts of a code line
echo '$x = 5 /* + 15 */ + 5; <br>';
$x = 5 /* + 15 */ + 5;
echo 'echo x = '.$x;
// echo $x;
?>

</body>
</html>