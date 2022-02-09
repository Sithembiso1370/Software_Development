<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$data['page_title'] . " | " . WEBSITE_TITLE?></title>
    <link rel="stylesheet" href="<?=ASSETS?>minima/css/components.css">
    <link rel="stylesheet" href="<?=ASSETS?>minima/css/icons.css">
    <link rel="stylesheet" href="<?=ASSETS?>minima/css/responsee.css">
    <link rel="stylesheet" href="<?=ASSETS?>minima/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?=ASSETS?>minima/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="<?=ASSETS?>minima/css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="<?=ASSETS?>minima/css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="<?=ASSETS?>minima/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>minima/js/jquery-ui.min.js"></script>      
  </head>

  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
     <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            <a href="index.html" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="<?=ASSETS?>minima/img/logo-dark.png" alt="">
              <!-- Logo version after sticky nav -->
              <img class="logo-after" src="<?=ASSETS?>minima/img/logo-dark.png" alt="">
            </a>
          </div>
          <?php if(isset($_SESSION['user_name'])): ?>

              Hi <?=$_SESSION['user_name']?>

            <?php endif; ?>
          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a href="<?=ROOT?>home">Home</a></li>
                <li><a href="<?=ROOT?>about">About Us</a></li>             
                <li><a href="<?=ROOT?>contact">Contact</a></li>
                
                <?php if(!isset($_SESSION['user_name'])): ?>
                  <li><a href="<?=ROOT?>login">Login</a></li>
                  <li><a href="<?=ROOT?>signup">Signup</a></li>
                <?php else: ?>
                  <li><a href="<?=ROOT?>logout">Logout</a></li>
                  <li><a href="<?=ROOT?>upload">Upload</a></li>
                <?php endif; ?>


              </ul>
            </div>
          </div>  
        </nav>
      </header>
      