<?php

//Procedural
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// Online
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'ntproesu_ntprocms');
// define('DB_PASSWORD', '21213131$Nt');
// define('DB_NAME', 'ntproesu_ntprodb');

// Offline
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ntproesu_ntprodb');

// ntproesu_ntprocms
// 21213131$Nt

 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>


