<?php
/**
 * User : Sithembiso1370 ...
 * @author Sithembiso Maphanga
 * @Date  : 27/02/2022
 * @ModifiedDate  : 27/02/2022
 */ #Time : 19:58


/**
 *  @var $model \app\models\User
 * @var $this \app\core\View
 * @var $model \app\models\ContactForm
 */

 use app\core\form\TextareaField;
 use app\core\form\ButtonField;

$this->title = 'Contact';
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
            <h2 align="center" style="justify-content: center;">Contact Us</h2>
            <p align="center">Please fill in your credentials to send us an email.</p>
        </div>
        <div class="wrapper1">

        <?php 
        use app\core\Application;





        echo Application::$app->session->getFlash('success');
        $form = \app\core\Form\Form::begin('',"post")
         ?>
        <!-- START  FORM INPUTS-->
        <?php  echo $form->field($model, 'subject')     ?>
        <?php  echo $form->field($model, 'email')     ?>
        <?php  echo new TextareaField($model, 'body')     ?>    
        <?php 
        //  echo new ButtonField($model, 'submit')     
        ?>
        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- END FORM INPUTS-->
        <?php        \app\core\Form\Form::end() ?>

         </div>   
    </div>
</body>
</html>

