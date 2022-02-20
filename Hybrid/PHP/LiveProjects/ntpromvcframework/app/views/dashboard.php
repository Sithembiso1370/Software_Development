<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $data['title']   ?></title>
    <link rel="stylesheet" href="<?php echo URLROOT   ?>/css/dashboard.css">
</head>
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
            
                <div class="topnav_items topnav_left" ><img id="hamburger_img" class="img1" src="<?php echo URLROOT?>/public/img/hamburger.png" alt=""></div>
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
                            <?php echo count($data['all_data'][0])  ?>
                        </div>
                    </div>
                    <div class="cards card2">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            <?php echo count($data['all_data'][1])  ?>
                        </div>
                    </div>
                    <div class="cards card3">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            <?php echo count($data['all_data'][2])  ?>
                        </div>
                    </div>
                    <div class="cards card4">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            <?php echo count($data['all_data'][3])  ?>
                        </div>
                    </div>
                    <div class="cards card5">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            <?php echo count($data['all_data'][4])  ?>
                        </div>
                    </div>
                    <div class="cards card3">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            <?php echo count($data['all_data'][5])  ?>
                        </div>
                    </div>
                    <div class="cards card4">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            <?php echo count($data['all_data'][6])  ?>
                        </div>
                    </div>
                    <div class="cards card5">
                        <div class="card_header">Customer Quotes</div>
                        <div class="no_of_docs">
                            <?php echo count($data['all_data'][7])  ?>
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
<script>
    window.addEventListener('click',(event)=>{
        if (event.target.getAttribute("id") == "hamburger_img") {
            var my_dashboard = document.getElementById("dashboard");
            if (event.target.getAttribute("class") == "img1") {
                my_dashboard.style.gridTemplateColumns = "0% 100%";
                event.target.classList += " active";
            }
            else{
                my_dashboard.style.gridTemplateColumns = "15% 80%";
                event.target.setAttribute("class","img1")  ;
            }
        }
    })
</script>
</html>