<!-- InsertMultipledata.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDOsampleDBOFROMCREATE";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // begin the transaction
  $conn->beginTransaction();
  // our SQL statements
//   value 1
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Nosi', 'Phangas', 'InsertMultipleRecs@example.com')");

//   value 2
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('InsertMultipleRecs', 'MultipleRecs', 'InsertMultipleRecs@example.com')");

//   value 3
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('MultipleRecsInsert', 'Dooley', 'julie@example.com')");

  // commit the transaction
  $conn->commit();
  echo "New records created successfully";
} catch(PDOException $e) {
  // roll back the transaction if something failed
  $conn->rollback();
  echo "Error: " . $e->getMessage();
}

$conn = null;
?>