<?php
//edit.php
include('database_connection.php');

$query = "
SELECT * FROM supplier_qoutes 
WHERE qoute_id = '".$_POST["qoute_id"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
 $file_array = explode(".", $row["qoute_name"]);
 $output['qoute_name'] = $file_array[0];
 $output['qoute_id'] = $row['qoute_id'];
 $output['submitted_on'] = $row['submitted_on'];
 $output['s_qoute_reference'] = $row['s_qoute_reference'];
 $output['qoute_items'] = $row['qoute_items'];
 $output['supplier_name'] = $row['Supplier_name'];
 $output['qoute_no'] = $row['qoute_no'];
 
}

echo json_encode($output);

?>


