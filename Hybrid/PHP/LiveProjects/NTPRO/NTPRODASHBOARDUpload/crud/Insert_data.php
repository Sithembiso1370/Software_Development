<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDOsampleDBOFROMCREATE";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Nkurta', 'Phangas', 'getLastID@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }


// FOR JUST AN INSERT NO LAST ID RETURNED
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     //My Mysql Command/query/statement
//     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//     VALUES ('John', 'Doe', 'john@example.com')";

//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "New record created successfully";
// } 
// catch(PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage();
// }

// // Close the connection
$conn = null;
?>