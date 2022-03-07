<?php

$this->title = 'Home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Allerta+Stencil&family=Red+Rose:wght@300;400&display=swap" rel="stylesheet">
</head>
    <body class="loginzz">
        <div>
            <h1>Home </h1>
        </div>
        <h3>

            
            <?php
            use app\core\Application;
            echo Application::$app->session->getFlash('success');
            if (Application::$app->user):
                # code...
                echo Application::$app->user->getDisplayName();
            else: 
                echo "Welcome to My MVC'S default page rendered if no other registered routes have been served";
            endif;
             ?>

        </h3>
    </body>

    <script>
          var a_links = document.getElementsByTagName("a");

          


        for( i = 0; i < a_links.length;i++){
            a_links[i].addEventListener("click",(event)=>{
                // event.preventDefault();
                console.log("clicked at ",event.target)
            });
        }
        //   a_links.forEach(element => {
        //       element.addEventListener("click",(event)=>{
        //         console.log(event.target)
        //       });
        //   });
    </script>
</html>