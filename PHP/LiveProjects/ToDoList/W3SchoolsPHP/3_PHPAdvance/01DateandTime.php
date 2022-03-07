<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);


while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}

echo "<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

echo "<br>";
// mktime(hour, minute, second, month, day, year)
$d= mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br>";
echo "The time is " . date("h:i:sa");
?>