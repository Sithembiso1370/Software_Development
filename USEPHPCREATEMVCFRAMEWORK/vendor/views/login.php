<?php
/**
 * User : Sithembiso1370 ...
 * @author Sithembiso Maphanga
 * @Date  : 15/12/2021
 * @ModifiedDate  : 07/01/2022
 */ #Time : 18:38


/**
 *  @var $model \app\models\User
 */

$this->title = 'lOGIN';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>

    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Allerta+Stencil&family=Red+Rose:wght@300;400&display=swap" rel="stylesheet">
</head>
<body class="loginzz">
<h3>
    </h3>
    <div class="Login">
        <div class="empty1">
            <h2 align="center" style="justify-content: center;">LOGIN</h2>
            <p align="center">Please fill in your credentials to login.</p>
        </div>
        <div class="wrapper1">
        <?php
        use app\core\Application;
        echo Application::$app->session->getFlash('success');  ?>
            <!-- START REGISTRATION FORM -->
            <?php        $form = \app\core\Form\Form::begin('',"post") ?>
                <!-- START  FORM INPUTS-->
                <?php  echo $form->field($model, 'email')     ?>
                <?php  echo $form->field($model, 'password')     ?>   
                <button type="submit" class="btn btn-primary">Submit</button>
                <!-- END FORM INPUTS-->
            <?php        \app\core\Form\Form::end() ?>
            <!-- END REGISTRATION FORM -->
         </div>   
    </div>
</body>
</html>