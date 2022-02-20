<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Allerta+Stencil&family=Red+Rose:wght@300;400&display=swap" rel="stylesheet">
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Allerta+Stencil&family=Red+Rose:wght@300;400&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ind.css" />
    <link rel="stylesheet" href="main.css">  -->
    <style>
        * {
            padding:0;
            margin: 0;

        }

        body {
            position: relative;
            height: 100%;
            width: 100%;
            display: grid;
            grid-template-rows: 20% 80% ;
        } 

/* Header section of login */
        header {
            position: relative;
            background-color: #a10017;
            color: white;
            height: 100%;
            display: grid;
            grid-Template-columns : 50% 50%;
        }
        .left-area{
            text-align: right;
        }

        .right-area {
            padding: 5%;
        }
/* Main section of login */
        .Login {
            display: grid;
            grid-template-rows: 20% 80%;
        }

        .wrapper1 {
            align-items: center;
            justify-content: center;
            padding-left: 10%;
            padding-right: 10%;
        }

        form>.form-group.form3 {
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-left: 15%;
            padding-right:15%;
        }

    </style>  
</head>
<body class="loginzz">
    <header>
        <label for="check" class="right-area">
            <i class="fas fa-bars" id="hamburguer"></i>
        </label>
        <div class="left-area fa-3x">   
                <h3>NTPRO<i class="fas fa-cog fa-spin fa-m"></i>-<span>CMS</span></h3>                      
        </div> 
    </header>
    <div class="Login">
        <div class="empty1">
            <h2 align="center" style="justify-content: center;">Login</h2>
            <p align="center">Please fill in your credentials to login.</p>
        </div>
        <div class="wrapper1">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="">
                    <span class="help-block"></span>
                </div>    
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <span class="help-block"></span>
                </div>
                <div class="form-group form3">
                    <input type="submit" class="btn btn-primary" value="Login">
                    <p>Struggling to login,<a href="#"> contact administrator</a></p>
                </div>
            </form>
         </div>   
    </div>
    <?php

    // listen if the post request has been sent on the page
    if (isset($_POST['password'])) {
        foreach ($data['users'] as $user) {
            # code...
            if($_POST['password'] == $user->password){
                // Password is correct, so start a new session
                // session_start();                            
                // Redirect user to welcome page
                header("location:".URLROOT."/pages/Homepage");
                //  $pgz = new Pages;
                //  $pgz->Homepage();
            }
            elseif ($_POST['password'] == "333") {
                # code...
                echo "hello";
            }
             else{
                // Display an error message if password is not valid
                // echo " not valid.";
                echo URLROOT;
                echo $_POST['password'];
                echo "<br>".$user->password;
                // echo "<br>";
            }
        }
    }
    else{
        echo "please log in";
        // echo "<br>";
    }

    // foreach ($data['users'] as $user) {
    //     if(password_verify($_POST['password'], $user->password)){
    //         // Password is correct, so start a new session
    //         // session_start();
                                       
    //         // Redirect user to welcome page
    //         header("location: /pages/Homepage");
    //     } else{
    //         // Display an error message if password is not valid
    //         // echo " not valid.";
    //         echo $_POST['password'];
    //         echo $user->password;
    //     }

    // }

    // if (isset($_POST['username']) and isset($_POST['password'])) {
    //     # code...
    //     echo 'user name = '.$_POST['username'].'<br>';
    //     echo 'user name = '.$_POST['password'];
    // }
/* This is how you echo out database information on the screen

*/

// echo $data['title'];
// echo '<br>';
// foreach ($data['users'] as $user) {
//     echo "Information: ". $user->username ."     ". $user->password;
//     echo "<br>";
// }

// print_r($data['users']);
?>
</body>
</html>