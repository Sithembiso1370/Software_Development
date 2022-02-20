<?php

// data source name 
$dsn = "mysql:host=localhost;dbname=assignment_tracker";
$username = "root";
$password = "";

// try catch for the database connection

try {
    //code...
    $db = new PDO($dsn,$username);
} catch (PDOException $e) {
    //throw $th;
    $error = "Database error:";
    $error .= $e->getMessage();

    // include the error view file
    include('view/error.php');

    exit();
}