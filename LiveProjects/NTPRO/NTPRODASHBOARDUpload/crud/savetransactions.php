<?php
// include('database_connection.php');
$servername = "localhost";


$username = 'ntproesu_ntprocms';
$password = '21213131$Nt';
$dbname = 'ntproesu_ntprodb';
$dbname = "myDBPDOsampleDBOFROMCREATE";

// Deaclaire empty array variables
$mytable = [];
$columns= [];
$allcollz  = [];
$filecol = '';

if (!empty($_POST['table']) && !empty($_POST['tablecolumns'])) {
   # code...
   $mytable = $_POST['table'];
   $columns = $_POST['tablecolumns'];
   $allcollz = $columns;
   $filecol = basename(explode(",",$columns)[1]);
   $filename = explode('/',$filecol);
   move_to_myFolder();

}


//1. Move the uploaded file first from the temporary folder to files
function move_to_myFolder(){
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
     
        $response = 0;
        if(in_array($file_extension,$valid_ext)){
           // Upload file
           if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
              $response = 1;
           } 
        }
     }
     return $response;
}

// Insert Multiple Records Into the Database using a prepared statement
try {
   $connect = new PDO("mysql:host=localhost;dbname=ntproesu_ntprodb", $username, $password);
   // set the PDO error mode to exception
   $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $colnames = getcolumnames($mytable);
   // prepare sql and bind parameterss
   $stmt = $connect->prepare("INSERT INTO ".$mytable." (".$colnames[2].",".$colnames[3].",".$colnames[4].",".$colnames[5].",".$colnames[6].")
   VALUES (:docname, :docno, :ntproid, :items, :custorsupp)");
   $stmt->bindParam(':docname', $docname);
   $stmt->bindParam(':docno', $docno);
   $stmt->bindParam(':ntproid', $ntproid);
   $stmt->bindParam(':items', $items);
   $stmt->bindParam(':custorsupp', $custorsupp);


   // insert a row
   $docname = explode(",",$allcollz)[0];
   $docno = explode(",",$allcollz)[1];
   $ntproid = explode(",",$allcollz)[2];
   $items = explode(",",$allcollz)[3];
   $custorsupp = explode(",",$allcollz)[4];
   $stmt->execute();

   // insert another row
   // $firstname = "Mary";
   // $lastname = "Moe";
   // $email = "BindedParams1PDO.com";
   // $stmt->execute();

   // // insert another row
   // $firstname = "Prepared Statment";
   // $lastname = "Dooley";
   // $email = "julie@example.com";
   // $stmt->execute();

   echo 1 ;
} 
catch(PDOException $e) 
{
    echo "Error: " . $e->getMessage();
}



// echo "1";
$conn = null;




// $output1 = '';
// $output = '';

// //1. Move the uploaded file first from the temporary folder 
// function move_to_myFolder(){
//     if(isset($_FILES['file']['name'])){
//         // file name
//         $filename = $_FILES['file']['name'];
     
//         // Location
//         $location = '../files/'.$filename;
     
//         // file extension
//         $file_extension = pathinfo($location, PATHINFO_EXTENSION);
//         $file_extension = strtolower($file_extension);
     
//         // Valid extensions
//         $valid_ext = array("pdf","doc","docx","jpg","png","jpeg","py");
     
//         $response = 0;
//         if(in_array($file_extension,$valid_ext)){
//            // Upload file
//            if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
//               $response = 1;
//            } 
//         }
//      }
//      return $response;
// }

// // $output1 = explode(",",$columns)[1];
// // $myfilename = explode(DIRECTORY_SEPARATOR ,$output1)[2];
// // $output =  explode("/",$output1)[2];
// //  2. Save the rest of the data with the file name
// // $file_pathz =  explode(",",$columns)[1];
// // $file_name = explode("/",$file_pathz);
// // echo $file_pathz;
// $columnnamez = getcolumnames($mytable);

// // to insert rows into a table
// function DBInsertData($table,$columnnames,$columnvalues,$connect){
//    $col1 = $columnnames[2];
//    $col2 = $columnnames[3];
//    $col3 = $columnnames[4];
//    $col4 = $columnnames[5];
//    $col5 = $columnnames[6];


//    $val1 = explode(DIRECTORY_SEPARATOR ,explode(",",$columnvalues)[1])[2];
//    $val2 = explode(",",$columnvalues)[2];
//    $val3 = explode(",",$columnvalues)[3];
//    $val4 = explode(",",$columnvalues)[4];
//    $val5 = explode(",",$columnvalues)[5];
//    $query = "
//    INSERT INTO '".$table."'
//    ('".$col1."','".$col2."','".$col3."','".$col4."','".$col5."') 
//    VALUES ('".$val1."','".$val2."','".$val3."','".$val4."','".$val5."')   
//    ";
//    $statement = $connect->prepare($query);
//    if ($statement->execute()) {
//       # code...
//       return 'success';
//    }
//    else {
//       return $statement->execute();
//    }
   
//    // return $val3;
// }

// if(DBInsertData($mytable,$columnnamez,$columns,$connect)){
//    $verifier = 1;
// }
// else{
//    $verifier = " % not ok";
// }



// function file_already_uploaded($file_name, $connect,table)
// {
//    $query = "SELECT * FROM supplier_deliverynotes WHERE deliverynote_name = '".$file_name."'";
//    $statement = $connect->prepare($query);
//    $statement->execute();
//    $number_of_rows = $statement->rowCount();
//    if($number_of_rows > 0)
//       {
//          return true;
//       }
//          else
//       {
//       return false;
//       }
// }

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
// type of = gettype($var);
// $outz = getcolumnames($mytable);
// echo DBInsertData($mytable,$columnnamez,$columns,$connect) ;
?>