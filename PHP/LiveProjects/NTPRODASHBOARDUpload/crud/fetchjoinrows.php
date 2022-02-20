<?php
include('database_connection.php');
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
                // OPEN
                $query = "
                SELECT * FROM ". $tableparam."  WHERE `s_qoute_reference` NOT IN (SELECT `s_qoute_reference` FROM customer_invoices2) ORDER BY `submitted_on` DESC LIMIT 0,17 
                ";
                $statement = $connection->prepare($query);
                $statement->execute();
            }
            elseif($openclosedparam == 'closed')
            {
                // Inner Join for closed transactions
                // CLOSED
                $query = "
                SELECT * FROM ". $tableparam."  WHERE `s_qoute_reference` IN (SELECT `s_qoute_reference` FROM customer_invoices2) ORDER BY `submitted_on` DESC  LIMIT 0,17 
                ";
                $statement = $connection->prepare($query);
                $statement->execute();

            }
            else{
                // Normal query for all transactions
                // All
                $query = "
                SELECT * FROM ". $tableparam." ORDER BY `submitted_on` DESC  LIMIT 0,17
                ";
                $statement = $connection->prepare($query);
                $statement->execute();
            }


            $result = $statement->fetchAll();
        }
        else{
            
            // For open and closed 
            if($openclosedparam == 'open'){
                // OPEN
                $query = "
                SELECT * FROM ". $tableparam."  WHERE `submitted_on` >= '".$fromparam."' AND `submitted_on` <= '".$toparam."' 
                AND  `s_qoute_reference` NOT IN (SELECT `s_qoute_reference` FROM customer_invoices2) ORDER BY `submitted_on` DESC  LIMIT 0,17
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
                AND  `s_qoute_reference` IN (SELECT `s_qoute_reference` FROM customer_invoices2) ORDER BY `submitted_on` DESC  LIMIT 0,17
                ";
                $statement = $connection->prepare($query);
                $statement->execute();

            }
            else{
                // Normal query for all transactions
                // All
                $query = "
                SELECT * FROM ". $tableparam." WHERE `submitted_on` >= '".$fromparam."' AND `submitted_on` <= '".$toparam."' ORDER BY `submitted_on` DESC  LIMIT 17
                ";
                $statement = $connection->prepare($query);
                $statement->execute();
            }
            // ---------------------------------------------
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

    $rowfetched = get_total_joined_rows($connect,$from,$to,$openclosed,$table);
    $total_data = get_count_joined_rows($connect,$table);





    if($total_data > 0)
        {
            if ( $rowfetched) {
                # code...
                foreach($rowfetched as $row)
                {
                    $output .= '
                    <tr>
                    <td>'.$row[1].'</td>
                    <td><a href="files/'.$row[2].'">'.$row[2].'</a></td>
                    <td>'.$row[4].'</td>
                    <td>'.$row[5].'</td>
                    <td>'.$row[6].'</td>
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