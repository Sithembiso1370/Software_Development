<!--Author: Sihle Mthimkhulu-->
<!DOCTYPE HTML>
<html>
<head>
<title>NT-Pro | Message status</title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/menu.css" rel='stylesheet' type='text/css' />
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MOVIPRO,CMP,MOVIFIT,MOVIAXIS,ELECTRIC CYLINDER,MOVIGEARB,UFP11A,UFI11A,UFD11A,DFP21 B,ETHERNET GATEWAY,PROFINET GATEWAY
NT-Pro,Machine,builders,Geared motors,Frequency inverters, automation,SEW,Servo motors,Frequency inverters, Geared motors,gear units" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js--->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---js--->
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<!---fonts-->
<!-- pop-up -->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
				<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-76066327-1', 'auto');
				  ga('send', 'pageview');
				</script>

<!-- pop-up -->

</head>
<body>
		<!---header--->
				<div class="header-section">
				<div class="head-top">
					   <div class="container">
						<div class="social-icon">
							<a href="#"><i class="icon"></i></a>
							<a href="#"><i class="icon1"></i></a>
							<a href="#"><i class="icon2"></i></a>
						</div>
						<div class="email">
						<ul>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><span>Email:</span> <a href="mailto:info@ntpro.co.za">info@ntpro.co.za</a> </li>
							<li  class="bold_"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><span>Call Us:</span> +27 11 051 9231</li>
							<!--<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
							<li><i class="glyphicon glyphicon-lock" aria-hidden="true"></i><a href="#" data-toggle="modal" data-target="#myModal1">Register</a></li>-->
						</ul>
						</div>
						 <div class="clearfix"></div>
					  </div>
					</div>
				<div class="container">
					
					<nav class="navbar navbar-default">
					<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>	
                            			  
							<div class="navbar-brand"  style="margin-bottom:22px;">
                            	<div class="logo">
									<a href="index.html"><img src="images/logo.jpg" alt=""></a>
                                </div>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="services.php">Our Services</a></li>
                                <li><a href="products.php">Products</a></li>
								<li class="active"><a href="contact.php">Contact</a></li>
							</ul>
							
							<div class="clearfix"></div>
						</div>
					</nav>
				</div>
			</div>
		<!---header--->
		<!---banner--->
		<div class="banner-section">
			<div class="container">
				<h2>Messaging</h2>
			</div>
		</div>
		<!---banner--->
		<div class="content">
			<div class="contact-section">
				<div class="container">			
					<p class="_message">
					<?php
					
							if ($_POST["Send"])
							{ 
								$ToEmail = 'info@ntpro.co.za'; 
								$EmailSubject = 'Site contact'; 
								$mailheader = "From: ".$_POST["Email"]."\r\n"; 
								$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
								$MESSAGE_BODY = "You have received this contact for ntpro: ".$_POST["Email"]."";
								if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader))
								{
									echo "Your email address has been successfully sent. We will get back to you as soon as possible";
								}
								else
								{
									echo "The email has not been successfully sent..";
								}
							}
						  if ($_POST["send_details"])
							{ 
								$ToEmail = 'info@ntpro.co.za'; 
								$EmailSubject = 'Site contact'; 
								$mailheader = "From: ".$_POST["Email"]."\r\n"; 
								$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
								$MESSAGE_BODY = "You have received this contact for ntpro: ".$_POST["Email"]."";
								if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader))
								{
									echo "Your email address has been successfully sent. We will get back to you as soon as possible";
								}
								else
								{
									echo "The email has not been successfully sent..";
								}
								/*$ToEmail = 'info@ntpro.co.za'; 
								$EmailSubject = 'Site contact email'; 
								$mailheader = "From: ".$_POST["email"]."\r\n"; 
								$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
								$MESSAGE_BODY = "Name: ".$_POST["name"]."";
								$MESSAGE_BODY .= "Surname: ".$_POST["surname"].""; 
								$MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
								$MESSAGE_BODY .= "Comment: ".$_POST["comment"].""; 
								if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader))
								{
									echo "Your message has been successfully sent. We will get back to you as soon as possible";
								}
								else
								{
									echo "The message has not been successfully sent..";
								}*/
							}
					?>
					</p>
				</div>
				
			</div>
			
				<!--<div class="back-dec"> </div>-->
		</div>
		<!---footer--->
					<div class="footer-section">
						<div class="container">
							<div class="footer-grids">
								<div class="col-xs-5 footer-grid">
									<h4>About NT-Pro</h4>
									<p>We support and maintain entity in the automation and control industry. 
									It is formed to re sell, support and maintain, repair SEW products, Servo motors,
									Frequency invertors, Geared motors and industrial gear units. 
									We intend to put the customer first, prevent breakdowns the best possible and to ensure
									that production never stops in the manufacturing and production plants.</p>
								</div>
								<div class="col-xs-13 footer-grid">
									<h4>Our Services</h4>
									<ul>
										<li><a href="services.php">Installation and commissioning</a></li>
										<li><a href="services.php">Onsite support and online support</a></li>
										<li><a href="services.php">On Demand Routine Maintenance </a></li>
										<li><a href="services.php"> Repairs</a></li>
										<li><a href="services.php">Free Solution Modelling</a></li>
										<li><a href="services.php">Free Product Training </a></li>
									</ul>
								</div>
								<div class="col-xs-13 footer-grid">
									<h4>Get In Touch</h4>
									<p>44 Easton Ave</p>
									<p>36 Melrose Place</p>
									<p>Norkem Park</p>
									<p>1618</p>
									<p>TEL : +27 11 051 9231</p>
									<p>E-mail : <a href="mailto:info@ntpro.com"> info@ntpro.com</a></p>
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
					<!---footer--->
					<!--copy-->
					<div class="copy-section">
						<div class="container">
							<p>&copy; 2016 NT-PRO. All rights reserved | Design by <a href="https://za.linkedin.com/in/sihle-mthimkhulu-3559047a">Sihle Mthimkhulu</a></p>
						</div>
					</div>
				<!--copy-->

			
			
			
</body>
</html>