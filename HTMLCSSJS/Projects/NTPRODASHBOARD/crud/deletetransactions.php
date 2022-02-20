<?php
$mytable = '';


$mytable = $_REQUEST["table"];
$dataid = $_REQUEST["dataid"];

$output = '';


// if(isset($_POST["purchaseorder_id"]))
// {
//     $file_path = 'files/' . $_POST["order_name"];
//     if(unlink($file_path))
//     {
//         $query = "DELETE FROM supplier_purchaseorders WHERE purchaseorder_id ='".$_POST["purchaseorder_id"]."'";
//         $statement = $connect->prepare($query);
//         $statement->execute();
//     }
// }

$username = "root";
$password = "";
$dbname = "ntproesu_ntprodb";
$pimary_column = "";
// set the primary column to the column name qhich is prinary key in the table
$pimary_column = getPrimarycolumnames($mytable)[0];



try {
  $conn = new PDO("mysql:host=localhost;dbname=ntproesu_ntprodb", $username,$password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM ".$mytable."";
  $sql .= " WHERE ".$pimary_column." =".$dataid."";



  // use exec() because no results are returned
  $conn->exec($sql);
  echo $dataid;
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
 $output =  $dataid;
 

 function getPrimarycolumnames($table){
    // $columnnames = [];
    $supplierqoutes = ["qoute_id"];
    $customerqoutes = ["qoute_id"];
    $supplierpurchaseorders = ["purchaseorder_id"];
    $customerpurchaseorders = ["purchaseorder_id"];
    $supplierinvoices = ["invoice_id"];
    $customerinvoices = ["invoice_id"];
    $supplierdeliverynotes = ["deliverynote_id"];
    $customerdeliverynotes = ["deliverynote_id"];
 
    switch ($table) {
       case 'supplier_qoutes':
          # code...
          $columnnames = $supplierqoutes;
          break;
       case 'customer_qoutes':
          # code...
          $columnnames = $customerqoutes;
          break;
       case 'supplier_purchaseorders2':
          # code...
          $columnnames = $supplierpurchaseorders;
          break;
       case 'customer_purchaseorders2':
          # code...
          $columnnames = $customerpurchaseorders;
          break;   
       case 'supplier_invoices2':
          # code...
          $columnnames = $supplierinvoices;
          break;
       case 'customer_invoices2':
          # code...
          $columnnames = $customerinvoices ;
          break;  
       case 'supplier_deliverynotes2':
          # code...
          $columnnames = $supplierdeliverynotes;
          break;
       case 'customer_deliverynotes2':
          # code...
          $columnnames = $customerdeliverynotes;
          break;
       default:
          # code...
          $columnnames = ["This table does not exist"];
          break;
    }
    return $columnnames;
 }


// echo $output;






?>