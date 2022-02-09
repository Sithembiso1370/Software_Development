<?php
//database_connection.php
// $connect = new PDO('mysql:host=localhost;dbname=ntproesu_ntprodb', 'root', '');
// $servername = "localhost";

// -- define('DB_SERVER', 'localhost');
// -- define('DB_USERNAME', 'ntproesu_ntprocms');
// -- define('DB_PASSWORD', '21213131$Nt');
// -- define('DB_NAME', 'ntproesu_ntprodb');

// Online
// $username = 'ntproesu_ntprocms';
// $password = '21213131$Nt';
// $dbname = 'ntproesu_ntprodb';


// Ofline
$username = 'root';
$password = '';
$dbname = 'ntproesu_ntprodb';

try {
    $connect = new PDO("mysql:host=localhost;dbname=ntproesu_ntprodb", $username,$password);
    // set the PDO error mode to exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>