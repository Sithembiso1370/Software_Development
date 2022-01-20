<?php
/* This is how you echo out database information on the screen

*/

echo $data['title'];
echo '<br>';
foreach ($data['users'] as $user) {
    echo "Information: ". $user->username ."     ". $user->password;
    echo "<br>";
}

// print_r($data['users']);
?>
