<?php
//edit.php
include('database_connection.php');

$query = "
SELECT * FROM supplier_purchaseorders 
WHERE purchaseorder_id = '".$_POST["purchaseorder_id"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
 $file_array = explode(".", $row["order_name"]);
 $output['order_name'] = $file_array[0];
 $output['purchaseorder_id'] = $row['purchaseorder_id'];
 $output['submitted_on'] = $row['submitted_on'];
 $output['s_qoute_reference'] = $row['s_qoute_reference'];
 $output['supplier_name'] = $row['supplier_name'];
 $output['expecteddeliverydate'] = $row['expecteddeliverydate'];
 $output['order_no'] = $row['order_no'];
 
}

echo json_encode($output);

?>


