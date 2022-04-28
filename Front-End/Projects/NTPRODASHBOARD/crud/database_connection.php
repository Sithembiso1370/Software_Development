<?php
//database_connection.php
// $connect = new PDO('mysql:host=localhost;dbname=ntproesu_ntprodb', 'root', '');
// $servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDOsampleDBOFROMCREATE";

try {
    $connect = new PDO("mysql:host=localhost;dbname=ntproesu_ntprodb", $username,$password);
    // set the PDO error mode to exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>