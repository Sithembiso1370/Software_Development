

<html>
<body>

<form action="formh.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>
<?php
$name = "";
if (isset($_GET["name"]) && isset($_GET["email"])) {
    # code...
    $name = $_GET["name"];
    echo "<br>";
    echo $_GET["email"];
}

echo "<h1>".$name."</h1>";
?>

</body>
</html>
$name = "";

