<?php
include('database_connection.php');

    function get_count_joined_rows($connection)
    {
    $query = "
    SELECT * FROM customer_qoutes"
    ;
    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->rowCount();
    return $result;
    }

    // $rowfetched = get_total_joined_rows($connect);
    $total_data = get_count_joined_rows($connect);

$output = '';

//                 <td><input type="checkbox" onclick="checkboxcolorrow(this);"/></td>
// <td>'.$row["submitted_on"].'</td>
// <td><a href="files/'.$row["qoute_name"].'" class="img-thumbnail" width="100" height="100">'.$row["qoute_name"].'</a></td>

  
//                 // <td><button type="button" class="btn btn-warning btn-xs edit" id="'.$row["qoute_id"].'">Edit</button></td>
                // <td><button type="button" class="btn btn-danger btn-xs delete" id="'.$row["qoute_id"].'" data-qoute_name="'.$row["qoute_name"].'">Delete</button></td>

    if($total_data > 0)
        {
            $output .= '
            <td>'.$total_data.'</td>
            ';
            // foreach($rowfetched as $row)
            // {
            //     $output .= '
            //     <tr>
            //     <td>'.$row["qoute_no"].'</td>
            //     <td><a href="files/'.$row["qoute_name"].'" class="img-thumbnail" width="100" height="100">'.$row["qoute_name"].'</a></td>
            //     <td>'.$row["s_qoute_reference"].'</td>
            //     <td>'.$row["qoute_items"].'</td>
            //     <td>'.$row["Supplier_name"].'</td>
            //     </tr>

            // }
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