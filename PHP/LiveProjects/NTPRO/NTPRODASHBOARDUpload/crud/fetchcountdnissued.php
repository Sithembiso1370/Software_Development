<?php
// include('database_connection.php');

// Online
// $username = 'ntproesu_ntprocms';
// $password = '21213131$Nt';
// $dbname = 'ntproesu_ntprodb';

// Offline
$username = 'root';
$password = '';
$dbname = 'ntproesu_ntprodb';

$connect = new PDO("mysql:host=localhost;dbname=ntproesu_ntprodb", $username,$password);
// set the PDO error mode to exception
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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