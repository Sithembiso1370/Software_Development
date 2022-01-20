<?php
//edit.php
include('database_connection.php');

$query = "
SELECT * FROM customer_purchaseorders 
WHERE purchaseorder_id = '".$_POST["purchaseorder_id"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
 $file_array = explode(".", $row["purchaseorder_name"]);
 $output['purchaseorder_name'] = $file_array[0];
 $output['purchaseorder_id'] = $row['purchaseorder_id'];
 $output['submitted_on'] = $row['submitted_on'];
 $output['s_qoute_reference'] = $row['s_qoute_reference'];
 $output['expected_deliverydate'] = $row['expected_deliverydate'];
 $output['p_order_no'] = $row['p_order_no'];
 
}

echo json_encode($output);

?>


