<?php
include('database_connection.php');


    function get_count_joined_rows($connection)
    {
    $query = "
    SELECT * FROM customer_deliverynotes"
    ;
    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->rowCount();
    return $result;
    }

    // $rowfetched = get_total_joined_rows($connect);
    $total_data = get_count_joined_rows($connect);

    $output = '';

    if($total_data > 0)
        {
            $output .= '
            <td>'.$total_data.'</td>
            ';
            // foreach($rowfetched as $row)
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