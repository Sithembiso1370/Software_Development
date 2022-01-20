<?php
// include('database_connection.php');

// function get_total_row($connect,$table)
// {
//   $query = "
//   SELECT * FROM $table 
//   ";
//   $statement = $connect->prepare($query);
//   $statement->execute();
//   return $statement->rowCount();
// }


// $table = '';

// Online
// $username = 'ntproesu_ntprocms';
// $password = '21213131$Nt';
// $dbname = 'ntproesu_ntprodb';

// Offline
$username = 'root';
$password = '';
$dbname = 'ntproesu_ntprodb';

$connection = new PDO("mysql:host=localhost;dbname=ntproesu_ntprodb", $username,$password);
// set the PDO error mode to exception
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




// $table =  $_REQUEST["range"];

// if(!($table = '') && $table = 'range'){
//     $output  = $table ; 
// }
// else{
//     $output  = 'out value was empty';
// }

    $from = $_REQUEST["from"];
    $to = $_REQUEST["to"];


    
    $openclosed = $_REQUEST["openclosed"];
    $table = $_REQUEST["table"];
    $output = '';



    function get_total_joined_rows($connection,$fromparam,$toparam,$openclosedparam,$tableparam) 
    {
        // 
        if($fromparam == "" || $toparam == ""){

            // For open and closed 
            if($openclosedparam == 'open'){
                // OPENS
                $query = "
                SELECT * FROM ". $tableparam."  WHERE `s_qoute_reference` NOT IN (SELECT `s_qoute_reference` FROM customer_invoices) ORDER BY `submitted_on` DESC LIMIT 20
                ";
                // $statement = $connection->prepare($query);
                // $statement->execute();
            }
            elseif($openclosedparam == 'closed')
            {
                // Inner Join for closed transactions
                // CLOSED
                $query = "
                SELECT * FROM ". $tableparam."  WHERE `s_qoute_reference` IN (SELECT `s_qoute_reference` FROM customer_invoices) ORDER BY `submitted_on` DESC  LIMIT 20
                ";
                // $statement = $connection->prepare($query);
                // $statement->execute();

            }
            else{
                // Normal query for all transactions
                // All
                $query = "
                SELECT * FROM ". $tableparam." ORDER BY `submitted_on` DESC  LIMIT 20
                ";
                // $statement = $connection->prepare($query);
                // $statement->execute();
            }

            $statement = $connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
        }
        else{
            
            // For open and closed 
            if($openclosedparam == 'open'){
                // OPEN
                $query = "
                SELECT * FROM ". $tableparam."  WHERE `submitted_on` >= '".$fromparam."' AND `submitted_on` <= '".$toparam."' 
                AND  `s_qoute_reference` NOT IN (SELECT `s_qoute_reference` FROM customer_invoices) ORDER BY `submitted_on` DESC  LIMIT 20
                ";
                // $statement = $connection->prepare($query);
                // $statement->execute();
            }
            elseif($openclosedparam == 'closed')
            {
                // Inner Join for closed transactions
                // CLOSED
                $query = "
                SELECT * FROM ". $tableparam."  WHERE `submitted_on` >= '".$fromparam."' AND `submitted_on` <= '".$toparam."' 
                AND  `s_qoute_reference` IN (SELECT `s_qoute_reference` FROM customer_invoices) ORDER BY `submitted_on` DESC  LIMIT 20
                ";
                // $statement = $connection->prepare($query);
                // $statement->execute();

            }
            else{
                // Normal query for all transactions
                // All
                $query = "
                SELECT * FROM ". $tableparam." WHERE `submitted_on` >= '".$fromparam."' AND `submitted_on` <= '".$toparam."' ORDER BY `submitted_on` DESC  LIMIT 20
                ";
                $statement = $connection->prepare($query);
                $statement->execute();
            }
            // ---------------------------------------------
            $statement = $connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
        }

        return $result;
    }


    function get_count_joined_rows($connection,$tableparam)
    {
        $query = "
        SELECT * FROM ".$tableparam
        ;
        $statement = $connection->prepare($query);
        $statement->execute();
        $result = $statement->rowCount();
        return $result;
    }

    $rowfetched = get_total_joined_rows($connection,$from,$to,$openclosed,$table);
    $total_data = get_count_joined_rows($connection,$table);


    // Create a decision for no of rows fetched

    // for(i=0; i <= $rowfetched; i++){

    // }


    if($total_data > 0)
        { 
            if ( $rowfetched) {
                # code...
                foreach($rowfetched as $row)
                {
                    $output .= '
                    <tr id="'.$row[0].'">
                        <td><a href="files/'.$row[2].'">'.$row[2].'.pdf<a/></td>
                        <td>'.$row[1].'</td>
                        <td>'.$row[3].'</td>
                        <td>'.$row[4].'</td>
                        <td>'.$row[5].'</td>
                        <td>'.$row[6].'</td>
                        <td><button id="Editbtn">Edit</button></td>
                        <td><button id="deletebtn">Delete</button></td>
                    </tr>
                    ';
                }
            }
            else {
                $output .= '
                <tr>
                    <td colspan="2" align="center">No Rows Found</td>
                </tr>
                ';
            }
        }
    else
        {
                $output .= '
                <tr>
                    <td colspan="2" align="center">No Data Found</td>
                </tr>
                ';
        }

    echo $output;




?>