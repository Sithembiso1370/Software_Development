<?php


// Prepared Statement PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytodo";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO todos ( Attachements, Goal_date, Est_duration, Current_duration, Added_by, description, type, due_date, complete, comments)
  VALUES (:Attachements, :Goal_date, :Est_duration, :Current_duration, :Added_by, :description, :type, :due_date, :complete, :comments)");

  // bind values to parameters
  $stmt->bindParam(':Attachements', $Attachements);
  $stmt->bindParam(':Goal_date', $Goal_date);
  $stmt->bindParam(':Est_duration', $Est_duration);
  $stmt->bindParam(':Current_duration', $Current_duration);
  $stmt->bindParam(':Added_by', $Added_by);
  $stmt->bindParam(':description', $description);
  $stmt->bindParam(':type', $type);
  $stmt->bindParam(':due_date', $due_date);
  $stmt->bindParam(':complete', $complete);
  $stmt->bindParam(':comments', $comments);

  // insert a row
  // (Goal_id, Attachements, Goal_date, Est_duration, Current_duration, Added_by, description, type, due_date, complete, comments)
  $Attachements = $_GET['Attachements'];
  $Goal_date= $_GET['Goal_date'];
  $Est_duration = $_GET['Est_duration'];
  $Current_duration = $_GET['Current_duration'];
  $Added_by = $_GET['Added_by'];
  $description = $_GET['description'];
  $type = $_GET['type'];
  $due_date = $_GET['due_date'];
  $complete = $_GET['complete'];
  $comments = $_GET['comments'];


  $stmt->execute();


  

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;