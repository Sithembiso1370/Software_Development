<?php
//edit.php
include('database_connection.php');

$query = "
SELECT * FROM customer_deliverynotes 
WHERE deliverynote_id = '".$_POST["deliverynote_id"]."'
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

foreach($result as $row)
{
 $file_array = explode(".", $row["deliverynote_name"]);
 $output['deliverynote_name'] = $file_array[0];
 $output['deliverynote_id'] = $row['deliverynote_id'];
 $output['submitted_on'] = $row['submitted_on'];
 $output['s_qoute_reference'] = $row['s_qoute_reference'];
 $output['comments'] = $row['comments'];
 $output['deliverynote_no'] = $row['deliverynote_no'];
 
}

echo json_encode($output);

?>


