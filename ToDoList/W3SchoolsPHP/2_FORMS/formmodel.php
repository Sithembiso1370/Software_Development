<?php



if (!empty($_POST['name']) && !empty($_POST['lname'])) {
    # code...
    echo $_POST['name'];
    echo '<br>';
    print_r($_REQUEST);
}

// function to test the nputs indivdually
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }