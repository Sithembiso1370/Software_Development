<?php
//delete.php

include('database_connection.php');

if(isset($_POST["deliverynote_id"]))
{
    $file_path = 'files/' . $_POST["deliverynote_name"];
    if(unlink($file_path))
    {
        $query = "DELETE FROM supplier_deliverynotes WHERE deliverynote_id ='".$_POST["deliverynote_id"]."'";
        $statement = $connect->prepare($query);
        $statement->execute();
    }
}

?>