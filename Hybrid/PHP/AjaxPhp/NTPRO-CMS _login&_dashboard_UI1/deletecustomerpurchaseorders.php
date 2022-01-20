<?php
//delete.php

include('database_connection.php');

if(isset($_POST["purchaseorder_id"]))
{
    $file_path = 'files/' . $_POST["purchaseorder_name"];
    if(unlink($file_path))
    {
        $query = "DELETE FROM customer_purchaseorders WHERE purchaseorder_id ='".$_POST["purchaseorder_id"]."'";
        $statement = $connect->prepare($query);
        $statement->execute();
    }
}

?>