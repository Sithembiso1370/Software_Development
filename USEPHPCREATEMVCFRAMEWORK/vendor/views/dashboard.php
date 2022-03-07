<?php
/**
 * User : Sithembiso1370 ...
 * @author Sithembiso Maphanga
 * @Date  : 17/02/2022
 * @ModifiedDate  : 07/01/2022
 */ #Time : 18:38


/**
 *  @var $model \app\models\User
 */


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
<?php
    require_once dirname(__DIR__).'/views/styles/dashboard.php';
    ?>
 <body>
         <!-- START OF THE DASHBOARD SECTION -->
    <div class="dashboard" id="dashboard">
        <!-- START LEFT SIDE OF THE DASHBOARD -->
        <div class="left_nav">
            <div class="left_header">
                <h2>NTPRO CMS</h2>
            </div>
            <ul class="left_nav_list">
                <li>OverView</li>
                <li>Projects</li>
                <li>Transactions</li>
                <li>Inventory</li>
                <li>Staff</li>
                <li>Accounts</li>
                <li>Settings</li>
                <li>Sign Out</li>
            </ul>
        </div>
        <!-- END LEFT SIDE OF THE DASHBOARD -->

        <!-- START MAIN SIDE OF THE DASHBOARD  -->
        <div class="center_main">
            <div class="topnav">
            
                <div class="topnav_items topnav_left" ><img id="hamburger_img" class="img1" src="/public/img/hamburger.png" alt=""></div>
                <div class="topnav_items topnav_center">
                    <div class="search">
                        <label for="search_txt"></label>
                        <input type="text" name="search_txt" placeholder="Type your search" id="search_txt" class="search_txt">
                    </div>
                </div>
                <div class="topnav_items topnav_right">right</div>
            </div>
            <div class="cards_nav">
                <div class="cards_slide">
                    <div class="cards card1">
                        <div class="card_header">Supplier Quotes</div>
                        <div class="no_of_docs">
                            
                        </div>
                    </div>
                    <div class="cards card2">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            <
                        </div>
                    </div>
                    <div class="cards card3">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            
                        </div>
                    </div>
                    <div class="cards card4">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            
                        </div>
                    </div>
                    <div class="cards card5">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            
                    </div>
                    <div class="cards card3">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            
                        </div>
                    </div>
                    <div class="cards card4">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            
                        </div>
                    </div>
                    <div class="cards card5">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                           
                        </div>
                    </div>
                </div>  
            </div>
            <div class="main_nav">
                <div class="charts_nav">
                    charts
                </div>
                <div class="tabels">
                    tables
                </div>
            </div>
        </div>
        <!-- END MAIN SIDE OF THE DASHBOARD  -->
    </div>
    <!-- END OF THE DASHBOARD SECTION -->
</body>
</html>
    
