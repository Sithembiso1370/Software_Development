<?php
// include('database_connection.php');
$username = "root";
$password = "";

$connect = new PDO("mysql:host=localhost;dbname=ntproesu_ntprodb", $username,$password);
// set the PDO error mode to exception
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$from = $_REQUEST["from"];
$to = $_REQUEST["to"];

$openclosed = $_REQUEST["openclosed"];
$table = $_REQUEST["table"];
$output = '';



function get_count_joined_rows($connection,$tableparam,$openclosedparam,$fromparam,$toparam)
{
    if($fromparam == "" || $toparam == ""){
        if($openclosedparam == 'open'){
            // OPEN
            $query = "
            SELECT * FROM ". $tableparam." WHERE `s_qoute_reference` NOT IN (SELECT `s_qoute_reference` FROM customer_invoices)
            ";
            $statement = $connection->prepare($query);
            $statement->execute();
        }
        elseif($openclosedparam == 'closed')
        {
            // Inner Join for closed transactions
            // CLOSED
            $query = "
            SELECT * FROM ". $tableparam." WHERE `s_qoute_reference`  IN (SELECT `s_qoute_reference` FROM customer_invoices)
            ";
            $statement = $connection->prepare($query);
            $statement->execute();
    
        }
        else{
            // Normal query for all transactions
            // All
            $query = "
            SELECT * FROM ". $tableparam."
            ";
            $statement = $connection->prepare($query);
            $statement->execute();
        }
        $result = $statement->rowCount();
        
    }
    else{
        // For open and closed 
        if($openclosedparam == 'open'){
            // OPEN
            $query = "
            SELECT * FROM ". $tableparam."  WHERE `submitted_on` >= '".$fromparam."' AND `submitted_on` <= '".$toparam."' 
            AND  `s_qoute_reference` NOT IN (SELECT `s_qoute_reference` FROM customer_invoices)  
            ";
            $statement = $connection->prepare($query);
            $statement->execute();
        }
        elseif($openclosedparam == 'closed')
        {
            // Inner Join for closed transactions
            // CLOSED
            $query = "
            SELECT * FROM ". $tableparam."  WHERE `submitted_on` >= '".$fromparam."' AND `submitted_on` <= '".$toparam."' 
            AND  `s_qoute_reference` IN (SELECT `s_qoute_reference` FROM customer_invoices)  
            ";
            $statement = $connection->prepare($query);
            $statement->execute();

        }
        else{
            // Normal query for all transactions
            // All
            $query = "
            SELECT * FROM ". $tableparam." WHERE `submitted_on` >= '".$fromparam."' AND `submitted_on` <= '".$toparam."' 
            ";
            $statement = $connection->prepare($query);
            $statement->execute();
        }
            $result = $statement->rowCount();
    }
    return $result;
}



    // $rowfetched = get_total_joined_rows($connect);
    $total_data = get_count_joined_rows($connect,$table,$openclosed,$from,$to);






    if($total_data > 0)
        {
            $output = '
            <td>'.$total_data.'</td>
            ';

        }
    else
        {
                $output = '
                <tr>
                    <td colspan="2" align="center">0</td>
                </tr>
                ';
        }


    echo $output;




?>