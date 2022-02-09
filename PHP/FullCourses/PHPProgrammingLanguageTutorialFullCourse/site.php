<?php

// Need a basic understanding of html


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPProgrammingLanguageTutorialFullCourse</title>
</head>
<body>
    <?php
        // foreach ($_SERVER as $key => $value) {
        //     # code...
        //     echo $key." = ".$value."<br>";
        // }
        // var_dump($_SERVER);

        if(isset($_REQUEST['submit']) && isset($_POST['textcontent'])){
            $name = $_POST['textcontent'];
        }
    ?>

    <form action="site.php" method="POST">
        <input type="text" name="textcontent">
        <p><?php   
            if ($name === '') {
                # code...
                echo 'Enter some text on the input feald';
                echo '<hr class="redborder">';
            }
            else {
                # code...
                echo 'Hi '.$name;
                '<hr class="greenborder">';
            }
        ?></p>
        <input type="submit" name= "submit"  value="send">
    </form>
    <style>
    .redborder {
        background: red;
        height: 5px;
        width: 100%;
        border: 3px solid red;
    }

    .greenborder {
        background: green;
        height: 5px;
        width: 100%;
        border: 3px solid yellowgreen;
    }
</style>
</body>
</html>