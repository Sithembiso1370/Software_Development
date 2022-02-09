<?php
//update.php

include('database_connection.php');

if(isset($_POST["purchaseorder_id"]))
{
 $old_name = get_old_qoute_name($connect, $_POST["purchaseorder_id"]);
 $file_array = explode(".", $old_name);
 $file_extension = end($file_array);
 $new_name = $_POST["order_name"] . '.' . $file_extension;
 $query = '';
 if($old_name != $new_name)
 {
  $old_path = 'files/' . $old_name;
  $new_path = 'files/' . $new_name;
  if(rename($old_path, $new_path))
  { 
   $query = "
   UPDATE supplier_purchaseorders 
   SET order_name = '".$new_name."', 
   order_no = '".$_POST["order_no"]."',
   s_qoute_reference = '".$_POST["s_qoute_reference"]."',
   expecteddeliverydate = '".$_POST["expecteddeliverydate"]."',
   supplier_name = '".$_POST["supplier_name"]."'
   WHERE purchaseorder_id = '".$_POST["purchaseorder_id"]."'
   ";
  }
 }
 else
 {
  $query = "
   UPDATE supplier_purchaseorders 
   SET 
   order_no = '".$_POST["order_no"]."',
   s_qoute_reference = '".$_POST["s_qoute_reference"]."',
   expecteddeliverydate = '".$_POST["expecteddeliverydate"]."',
   supplier_name = '".$_POST["supplier_name"]."'
   WHERE purchaseorder_id = '".$_POST["purchaseorder_id"]."'
   ";
 }
 
 $statement = $connect->prepare($query);
 $statement->execute();
}
function get_old_qoute_name($connect,$purchaseorder_id)
{
 $query = "
 SELECT order_name FROM supplier_purchaseorders WHERE purchaseorder_id = '".$purchaseorder_id."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["order_name"];
 }
}

?>