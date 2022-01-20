<?php
session_start();
include('database_connection.php');

function get_total_row($connect)
{
  $query = "
  SELECT * FROM customer_qoutes 
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  return $statement->rowCount();
}

$total_record = get_total_row($connect);

$limit = '5';
$page = 1;

if($_POST['page'] > 1)
  {
    $start = (($_POST['page'] - 1) * $limit);
    $page = $_POST['page'];
  }
else
  {
    $start = 0;
  }

$query = "
SELECT * FROM customer_qoutes
";

//	s_qoute_reference
if($_POST['query'] != '')
  {
    $query .= '
    WHERE s_qoute_reference  LIKE "%'.str_replace(' ', '%', $_POST['query']).'%"
    OR qoute_no LIKE "%'.str_replace(' ', '%', $_POST['query']).'%"
    OR client_name LIKE "%'.str_replace(' ', '%', $_POST['query']).'%"
    ';
  }

$query .= 'ORDER BY qoute_id ASC ';

$filter_query = $query . 'LIMIT '.$start.', '.$limit.'';

$statement = $connect->prepare($query);
$statement->execute();
$total_data = $statement->rowCount();

$statement = $connect->prepare($filter_query);
$statement->execute();
$result = $statement->fetchAll();
$total_filter_data = $statement->rowCount();

$output = '
<label>Total Records - '.$total_data.'</label>
<table align="center" class="table table-striped table-bordered"  style="width:100%;">
  <tr>
    <th>Date uploaded</th>
    <th>Qoute attachment</th>
    <th>Qoute number</th>
    <th>NTPRO ID</th>
    <th>Qoute Items</th>
    <th>Client name</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
';


if($total_data > 0)
{
  foreach($result as $row)
  {
    $output .= '
    <tr>
      <td>'.$row["submitted_on"].'</td>
      <td><a href="files/'.$row["qoute_name"].'" class="img-thumbnail" width="100" height="100">'.$row["qoute_name"].'</a></td>
      <td>'.$row["qoute_no"].'</td>
      <td>'.$row["s_qoute_reference"].'</td>
      <td>'.$row["qoute_items"].'</td>
      <td>'.$row["client_name"].'</td>
      <td><button type="button" class="btn btn-warning btn-xs edit" id="'.$row["qoute_id"].'">Edit</button></td>
      <td><button type="button" class="btn btn-danger btn-xs delete" id="'.$row["qoute_id"].'" data-qoute_name="'.$row["qoute_name"].'">Delete</button></td>
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

$output .= '
</table>
<br />
<div align="center">
  <ul class="pagination">
';

$total_links = ceil($total_data/$limit);
$previous_link = '';
$next_link = '';
$page_link = '';

//echo $total_links;

if($total_links > 4)
{
  if($page < 5)
  {
    for($count = 1; $count <= 5; $count++)
    {
      $page_array[] = $count;
    }
    $page_array[] = '...';
    $page_array[] = $total_links;
  }
  else
  {
    $end_limit = $total_links - 5;
    if($page > $end_limit)
    {
      $page_array[] = 1;
      $page_array[] = '...';
      for($count = $end_limit; $count <= $total_links; $count++)
      {
        $page_array[] = $count;
      }
    }
    else
    {
      $page_array[] = 1;
      $page_array[] = '...';
      for($count = $page - 1; $count <= $page + 1; $count++)
      {
        $page_array[] = $count;
      }
      $page_array[] = '...';
      $page_array[] = $total_links;
    }
  }
}
else
{
  for($count = 1; $count <= $total_links; $count++)
  {
    $page_array[] = $count;
  }
}

for($count = 0; $count < count($page_array); $count++)
{
  if($page == $page_array[$count])
  {
    $page_link .= '
    <li class="page-item active">
      <a class="page-link" href="#">'.$page_array[$count].' <span class="sr-only">(current)</span></a>
    </li>
    ';

    $previous_id = $page_array[$count] - 1;
    if($previous_id > 0)
    {
      $previous_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previous_id.'">Previous</a></li>';
    }
    else
    {
      $previous_link = '
      <li class="page-item disabled">
        <a class="page-link" href="#">Previous</a>
      </li>
      ';
    }
    $next_id = $page_array[$count] + 1;
    if($next_id >= $total_links)
    {
      $next_link = '
      <li class="page-item disabled">
        <a class="page-link" href="#">Next</a>
      </li>
        ';
    }
    else
    {
      $next_link = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$next_id.'">Next</a></li>';
    }
  }
  else
  {
    if($page_array[$count] == '...')
    {
      $page_link .= '
      <li class="page-item disabled">
          <a class="page-link" href="#">...</a>
      </li>
      ';
    }
    else
    {
      $page_link .= '
      <li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$page_array[$count].'">'.$page_array[$count].'</a></li>
      ';
    }
  }
}

$output .= $previous_link . $page_link . $next_link;
$output .= '
  </ul>

</div>
';
echo $output;
?>

