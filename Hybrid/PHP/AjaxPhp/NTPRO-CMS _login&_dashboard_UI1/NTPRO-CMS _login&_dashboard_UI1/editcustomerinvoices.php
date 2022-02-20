<?php
//edit.php
include('database_connection.php');

$query = "
SELECT * FROM customer_invoices
WHERE invoice_id = '".$_POST["invoice_id"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
 $file_array = explode(".", $row["invoice_name"]);
 $output['invoice_name'] = $file_array[0];
 $output['invoice_id'] = $row['invoice_id'];
 $output['submitted_on'] = $row['submitted_on'];
 $output['s_qoute_reference'] = $row['s_qoute_reference'];
 $output['invoice_details'] = $row['invoice_details'];
 $output['invoice_no'] = $row['invoice_no'];
 
}

echo json_encode($output);

?>


