<?php
//update.php

include('database_connection.php');

if(isset($_POST["deliverynote_id"]))
{
 $old_name = get_old_qoute_name($connect, $_POST["deliverynote_id"]);
 $file_array = explode(".", $old_name);
 $file_extension = end($file_array);
 $new_name = $_POST["deliverynote_name"] . '.' . $file_extension;
 $query = '';
 if($old_name != $new_name)
 {
  $old_path = 'files/' . $old_name;
  $new_path = 'files/' . $new_name;
  if(rename($old_path, $new_path))
  { 
   $query = "
   UPDATE supplier_deliverynotes 
   SET deliverynote_name = '".$new_name."', 
   deliverynote_no = '".$_POST["deliverynote_no"]."',
   s_qoute_reference = '".$_POST["s_qoute_reference"]."',
   delivered_itemsdescription = '".$_POST["delivered_itemsdescription"]."'
   WHERE deliverynote_id = '".$_POST["deliverynote_id"]."'
   ";
  }
 }
 else
 {
  $query = "
   UPDATE supplier_deliverynotes 
   SET 
   deliverynote_no = '".$_POST["deliverynote_no"]."',
   s_qoute_reference = '".$_POST["s_qoute_reference"]."',
   delivered_itemsdescription = '".$_POST["delivered_itemsdescription"]."'
   WHERE deliverynote_id = '".$_POST["deliverynote_id"]."'
   ";
 }
 
 $statement = $connect->prepare($query);
 $statement->execute();
}
function get_old_qoute_name($connect,$deliverynote_id)
{
 $query = "
 SELECT deliverynote_name FROM supplier_deliverynotes WHERE deliverynote_id = '".$deliverynote_id."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["deliverynote_name"];
 }
}

?>