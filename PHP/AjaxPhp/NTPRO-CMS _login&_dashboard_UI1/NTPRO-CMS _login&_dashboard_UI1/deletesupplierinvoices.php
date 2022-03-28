<?php
//delete.php

include('database_connection.php');

if(isset($_POST["invoice_id"]))
{
    $file_path = 'files/' . $_POST["invoice_name"];
    if(unlink($file_path))
    {
        $query = "DELETE FROM supplier_invoices WHERE invoice_id ='".$_POST["invoice_id"]."'";
        $statement = $connect->prepare($query);
        $statement->execute();
    }
}

?>