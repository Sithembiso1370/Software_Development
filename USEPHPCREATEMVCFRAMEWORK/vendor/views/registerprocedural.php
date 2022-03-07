<?php
/**
 * User : Sithembiso1370 ...
 * @author Sithembiso Maphanga
 * @Date  : 15/12/2021
 * @ModifiedDate  : 07/01/2022
 */ #Time : 18:38




 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
    <form method="post" action="">
    <h1>Register </h1>
     <div class="form-group">
        <label >First Name</label>
        <input type="text"  id="firstname" name="firstname" placeholder="<?php  echo $model->firstname ?? ''; ?>"
        class="form-control<?php  echo  $model->hasError('firstname') ? ' is-invalid' : ''; ?>">
        <div class="invalid-feedback">
            <?php     echo $model->getFirstError('firstname') ?? '';   ?>
        </div>
    </div>
    <div class="form-group">
        <label >Email</label>
        <input type="text"  id="lastname" name="lastname" placeholder="
        <?php  
         echo $model->lastname ?? '';     
         ?>
        ">
        <div class="invalid-feedback">
            <?php     echo $model->getFirstError('lastname') ?? '';   ?>
        </div>
    </div>
    <div class="form-group">
        <label >Email</label>
        <input type="text"  id="email" name="email" placeholder="
        <?php  
         echo $model->email ?? '';     
         ?>
        ">
        <div class="invalid-feedback">
            <?php     echo $model->getFirstError('email') ?? '';   ?>
        </div>
    </div>
    <div class="form-group">
        <label >Password</label>
        <input type="text"  id="password" name="password" placeholder="
        <?php  
         echo $model->password ?? '';     
         ?>
        ">
        <div class="invalid-feedback">
            <?php     echo $model->getFirstError('password') ?? '';   ?>
        </div>
    </div>
    <div class="form-group">
        <label >Confirm Password</label>
        <input type="text"  id="passwordConfirm" name="passwordConfirm" placeholder="<?php  echo $model->passwordConfirm ?? ''; ?>">
        <div class="invalid-feedback">
            <?php     echo $model->getFirstError('passwordConfirm') ?? '';   ?>
        </div>
        
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <div class="form-group form3">
        <a href="/login">Login</a>
    </div>
    </form>


</body>
</html>