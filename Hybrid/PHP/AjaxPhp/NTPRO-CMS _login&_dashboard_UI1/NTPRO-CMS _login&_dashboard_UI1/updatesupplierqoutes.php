<?php
//update.php

include('database_connection.php');

if(isset($_POST["qoute_id"]))
{
 $old_name = get_old_qoute_name($connect, $_POST["qoute_id"]);
 $file_array = explode(".", $old_name);
 $file_extension = end($file_array);
 $new_name = $_POST["qoute_name"] . '.' . $file_extension;
 $query = '';
 if($old_name != $new_name)
 {
  $old_path = 'files/' . $old_name;
  $new_path = 'files/' . $new_name;
  if(rename($old_path, $new_path))
  { 
   $query = "
   UPDATE supplier_qoutes 
   SET qoute_name = '".$new_name."', 
   qoute_no = '".$_POST["qoute_no"]."',
   s_qoute_reference = '".$_POST["s_qoute_reference"]."',
   qoute_items = '".$_POST["qoute_items"]."',
   supplier_name = '".$_POST["supplier_name"]."'
   WHERE qoute_id = '".$_POST["qoute_id"]."'
   ";
  }
 }
 else
 {
  $query = "
   UPDATE supplier_qoutes 
   SET 
   qoute_no = '".$_POST["qoute_no"]."',
   s_qoute_reference = '".$_POST["s_qoute_reference"]."',
   qoute_items = '".$_POST["qoute_items"]."',
   supplier_name = '".$_POST["supplier_name"]."'
   WHERE qoute_id = '".$_POST["qoute_id"]."'
   ";
 }
 
 $statement = $connect->prepare($query);
 $statement->execute();
}
function get_old_qoute_name($connect, $qoute_id)
{
 $query = "
 SELECT qoute_name FROM supplier_qoutes WHERE qoute_id = '".$qoute_id."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["qoute_name"];
 }
}

?>