<?php
$mytable = '';
$tablecolumns = '';

$mytable = $_REQUEST["table"];
$tablecolumns = $_REQUEST["tablecolumns"];






$output = '';


$explodedcolumns= [];
 $explodedcolumns = explode(",",$tablecolumns);



 $output =  $explodedcolumns[0];






echo $output;






?>