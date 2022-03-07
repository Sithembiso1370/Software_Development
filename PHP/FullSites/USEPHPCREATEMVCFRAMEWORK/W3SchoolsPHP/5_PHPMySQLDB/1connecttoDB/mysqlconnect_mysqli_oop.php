<?php

// Before we can access data in the MySQL database, we need to be able to connect to the server
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// $connect_error was broken until PHP 5.2.9 and 5.3.0. If you need to ensure compatibility with PHP 
// versions prior to 5.2.9 and 5.3.0, use the following code instead:

// Check connection
if (mysqli_connect_error()) {
  die("Database connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


// The connection will be closed automatically when the script ends. To close the connection before, use the following:
$conn->close();

?>
