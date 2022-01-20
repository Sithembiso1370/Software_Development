<?php
$mytable = '';
$tablecolumns = '';
$rowId = 0;

$mytable = $_REQUEST["table"];
$tablecolumns = $_REQUEST["tablecolumns"];
$rowId = $_REQUEST["row_id"];
// $output = '';
$explodedcolumns= [];
 $explodedcolumns = explode(",",$tablecolumns);
//  $output =  $explodedcolumns[0];
$colz_to_update = [];
$col_names_to_update =[];
// Check empty comlums

for ($i=0; $i <= sizeof( $explodedcolumns)  ; $i++) { 
    # code...
    $collzz = getcolumnames($mytable);
    // echo sizeof($explodedcolumns);
    // echo $collzz[0];
    if($explodedcolumns[$i] == ""){
        continue;
    }
    else {
        array_push($colz_to_update,$collzz[$i+2]);
    }
}

for ($i=0; $i < sizeof($explodedcolumns)  ; $i++) { 
    # code...
    $collzz = getcolumnames($mytable);
    // echo sizeof($explodedcolumns);
    // echo $collzz[0];
    if($explodedcolumns[$i] == ""){
        continue;
    }
    elseif($i == 0){
        array_push($col_names_to_update,$explodedcolumns[$i]);
    }
    else {
        array_push($col_names_to_update,$explodedcolumns[$i]);
    }
}


// Online
// $username = 'ntproesu_ntprocms';
// $password = '21213131$Nt';
// $dbname = 'ntproesu_ntprodb';

// Offline
$username = 'root';
$password = '';
$dbname = 'ntproesu_ntprodb';

// echo sizeof($explodedcolumns);$my_f_Path
// echo "table columns names = ".implode($col_names_to_update,"/");
try {
    $conn = new PDO("mysql:host=localhost;dbname=ntproesu_ntprodb", $username,$password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $sql = "UPDATE ".$mytable." SET";
    for ($i= 0; $i < sizeof($colz_to_update)  ; $i++) { 
        // $sql .= " ".$colz_to_update[$i]."= ".$col_names_to_update[$i].",";

        if($i ==  sizeof($colz_to_update)-1){
                 # code...
            $sql .= " ".$colz_to_update[$i]." = '".$explodedcolumns[$i]."'";
            
         }
         else {
            $sql .= " ".$colz_to_update[$i]."= '".$explodedcolumns[$i]."',";
         }

    }
    $sql .= " WHERE ".$collzz[0]."='".$rowId."'";
  
    // Prepare statement
    $stmt = $conn->prepare($sql);
  
    // execute the query
    $stmt->execute();
  
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    move_to_myFolder();
  } 
  catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;


//1. Move the uploaded file first from the temporary folder to files
function move_to_myFolder(){
    $response = 0;
    if(isset($_FILES['file']['name'])){
        // file name
        $filename = $_FILES['file']['name'];

        
     
        // Location
        $location = '../files/'.$filename;
     
        // file extension
        $file_extension = pathinfo($location, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);
     
        // Valid extensions
        $valid_ext = array("pdf","doc","docx","jpg","png","jpeg","py");
     
        
        if(in_array($file_extension,$valid_ext)){
           // Upload file
           if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
              $response = 1;
           } 
        }
     }
     return $response;
}





// echo $tablecolumns;

function getcolumnames($table){
    // $columnnames = [];
    $supplierqoutes = ["qoute_id","submitted_on","qoute_name","qoute_no","s_qoute_reference","qoute_items","Supplier_name"];
    $customerqoutes = ["qoute_id","submitted_on","qoute_name","qoute_no","s_qoute_reference","qoute_items","client_name"];
    $supplierpurchaseorders = ["purchaseorder_id","submitted_on","supplier_name","order_name","order_no","s_qoute_reference","expecteddeliverydate"];
    $customerpurchaseorders = ["purchaseorder_id","submitted_on","purchaseorder_name","p_order_no","s_qoute_reference","expected_deliverydate","summary"];
    $supplierinvoices = ["invoice_id","submitted_on","invoice_name","invoice_no","s_qoute_reference","supplier_name","summary"];
 
    $customerinvoices = ["invoice_id","submitted_on","invoice_name","invoice_no","s_qoute_reference","invoice_details","summary"];
 
 
    $supplierdeliverynotes = ["deliverynote_id","submitted_on","deliverynote_name","deliverynote_no","s_qoute_reference","delivered_itemsdescription","summary"];
    $customerdeliverynotes = ["deliverynote_id","submitted_on","deliverynote_name","deliverynote_no","s_qoute_reference","comments","summary"];
 
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
?>