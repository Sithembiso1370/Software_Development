<?php
//delete.php

include('database_connection.php');

if(isset($_POST["qoute_id"]))
{
    $file_path = 'files/' . $_POST["qoute_name"];
    if(unlink($file_path))
    {
        $query = "DELETE FROM supplier_qoutes WHERE qoute_id = '".$_POST["qoute_id"]."'";
        $statement = $connect->prepare($query);
        $statement->execute();
    }
}

?>