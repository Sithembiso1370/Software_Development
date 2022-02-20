<?php
//update.php

include('database_connection.php');

if(isset($_POST["invoice_id"]))
{
 $old_name = get_old_qoute_name($connect, $_POST["invoice_id"]);
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
   UPDATE customer_invoices 
   SET invoice_name = '".$new_name."', 
   invoice_no = '".$_POST["invoice_no"]."',
   s_qoute_reference = '".$_POST["s_qoute_reference"]."',
   invoice_details = '".$_POST["invoice_details"]."'
   WHERE invoice_id = '".$_POST["invoice_id"]."'
   ";
  }
 }
 else
 {
  $query = "
   UPDATE customer_invoices
   SET 
   invoice_no = '".$_POST["invoice_no"]."',
   s_qoute_reference = '".$_POST["s_qoute_reference"]."',
   invoice_details = '".$_POST["invoice_details"]."'
   WHERE invoice_id = '".$_POST["invoice_id"]."'
   ";
 }
 
 $statement = $connect->prepare($query);
 $statement->execute();
}
function get_old_qoute_name($connect,$invoice_id)
{
 $query = "
 SELECT invoice_name FROM customer_invoices WHERE invoice_id = '".$invoice_id."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row["invoice_name"];
 }
}

?>