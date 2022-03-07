<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "dbname=ntproesu_ntprodb";


// procedural pdo
// try {
//     $conn = new PDO("mysql:host=$servername;".$db, $username, $password);

//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     echo "Connected successfully with ".explode("=",$db)[1];
// } 
// catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }



// functional pdo
function connDB($server,$user,$pass,$database){

    try {
        $conn = new PDO("mysql:host=$server;".$database, $user, $pass);
    
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $ret = "Connected successfully with ".explode("=",$database)[1];
    } 
    catch(PDOException $e) {
        $ret = "Connection failed: " . $e->getMessage();
    }

    echo $ret;
    return $ret;

}

connDB($servername,$username,$password,$db)
?>