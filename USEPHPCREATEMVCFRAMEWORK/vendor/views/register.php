<?php
/**
 * User : Sithembiso1370 ...
 * @author Sithembiso Maphanga
 * @Date  : 15/12/2021
 * @ModifiedDate  : 07/01/2022
 * @ModifiedDate  : 24/01/2022
 * Time : 18:38
 */ 


/**
 *  @var $model \app\models\User
 */
$this->title = 'Register';
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
<style>
    .is-invalid {
        background: red;
        color: white;
        
    }
</style>
<body class="loginzz">

    
    <h1>Create an Account</h1>
    <!-- START REGISTRATION FORM -->
    <?php        $form = \app\core\Form\Form::begin('',"post") ?>
        <!-- START  FORM INPUTS-->
        <div class="row">
            <div class="col">
                <?php  echo $form->field($model, 'firstname')     ?>
            </div>
            <div class="col">
                <?php  echo $form->field($model, 'lastname')     ?>
            </div>
        </div>
        <?php  echo $form->field($model, 'email')     ?>
        <?php  echo $form->field($model, 'password')->passwordField()     ?>
        <?php  echo $form->field($model, 'passwordConfirm')->passwordConfirmField()      ?>    
        <button type="submit" class="btn btn-primary">Submit</button>
        <!-- END FORM INPUTS-->
    <?php        \app\core\Form\Form::end() ?>
    <!-- END REGISTRATION FORM -->
  