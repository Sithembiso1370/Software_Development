<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">

        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/ind.css" />
        
        <title>Dashboard Side Nav Bar</title>
    </head>
    <body style="background-image: linear-gradient(to top, #28363d, #22323c, #1e2f3b, #192b3a, #162739, #182234, #191e2f, #1a1929, #1a141f, #160e15, #0f070b, #000000) !important;">
    <input type="checkbox" name="" id="check" />
        <header>
            <label for="check">
                <i class="fas fa-bars" id="hamburguer"></i>
            </label>
            <div class="left-area">
                <h3>NTPRO<span>Drive</span></h3>
            </div>
            <div class="right-area">
                <a href="#" class="logout-btn"
                    >Logout <i class="fas fa-sign-out-alt"></i
                ></a>
            </div>
        </header>
        <div  class="sidebar">
            <nav>
                <a href="Homepage.php"
                    ><i class="fas fa-desktop"></i><span>Dashboard</span></a
                >
                <a href="ntprosummary.php"
                    ><i class="far fa-eye"></i><span>Summary Cards</span></a
                >
                <hr>
                <a href="customerqoutes.php"
                    ><i class="far fa-clipboard"></i><span>Customer Qoutes</span></a
                    >
                <a href="customerpurchaseorders.php"
                    ><i class="fas fa-comments-dollar"></i><span >Customer Purchase Orders</span></a
                >
                <a href="customerinvoices.php"
                    ><i class="fas fa-file-invoice-dollar"></i><span>Customer Invoices</span></a
                >
                <a href="customerdeliverynotes.php"
                    ><i class="fas fa-shipping-fast"></i><span>Customer delivery notes</span></a
                >
                <a href="supplierqoutes.php"
                    ><i class="far fa-clipboard"></i><span>Supplier Qoutes</span></a
                >
                <a href="supplierpurchaseorders.php"
                    ><i class="fas fa-comments-dollar"></i><span>Supplier Purchase Orders</span></a
                >
                <a href="supplierinvoices.php"
                    ><i class="fas fa-file-invoice-dollar"></i><span>Supplier Invoices</span></a
                >
                <a href="supplierdeliverynotes.php"
                    ><i class="fas fa-shipping-fast"></i><span>Supplier Delivery Notes</span></a
                >
            </nav>
        </div>
    <hr>
    <h1 align="center" style="color: whitesmoke !important;">NTPRODRIVE Cards for summary</h1>
        <div class="cards" style="padding: 5% 0.1% 2% 30%;" style="width: 100%;" style="margin: 0 0 0 0;">
        <?php 
            $connect = new PDO('mysql:host=localhost;dbname=ntproesu_ntprodb', 'ntproesu_ntprocms', '21213131$Nt');

            function get_total_rowsdelivered($connect)
            {
              $query1 = "
              SELECT * FROM `costumers` 
              WHERE `Order_delivered` is NOT NULL 
              and trim(coalesce(Order_delivered, '')) = 'yes'
              ";
              $statement = $connect->prepare($query1);
              $statement->execute();
              return $statement->rowCount();
            }
            $total_recordscard1 = get_total_rowsdelivered($connect);

            function get_total_rowscustpaid($connect)
            {
              $query2 = "
              SELECT * FROM `costumers` WHERE `Customer_Paid` is NOT NULL and 
              trim(coalesce(Customer_Paid, '')) = 'yes'
              ";
              $statement = $connect->prepare($query2);
              $statement->execute();
              return $statement->rowCount();
            }
            $total_recordscard2 = get_total_rowscustpaid($connect);
        ?>
            <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-truck-loading fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">ORDERS Delivered</span>
                        <span style="color:white;font-size:26px"><?php echo "$total_recordscard1"; ?></span>
                    </div>
                    <div class="card1-3">
                            <div class="badge">
                            <div style="display:flex;flex-direction: column">
                                    <div class="triangle" style="border-color:transparent #46A39A transparent transparent;">

                                    </div>
                                    <div class="ctriangle" style="border-color: transparent #46A39A transparent transparent;"></div>
                                </div>
                                <div class="badge-text-div" style="background-color: #46A39A"></div>
                        
                    </div>
                        <div class="card1-3-2">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>This Month</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>

            </div>
            <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-clone fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">Payments recieved</span>
                        <span style="color:white;font-size:26px"><?php echo "$total_recordscard2";?></span>
                    </div>
                    <div class="card1-3">
                            <div class="badge">
                            <div style="display:flex;flex-direction: column">
                                    <div class="triangle" style="border-color:transparent #EC4961 transparent transparent;">

                                    </div>
                                    <div class="ctriangle" style="border-color:transparent #EC4961 transparent transparent;"></div>
                                </div>
                                <div class="badge-text-div" style="background-color: #EC4961"></div>
                        
                    </div>
                        <div class="card1-3-2">
                            <i style="color:EC4961" class="fas fa-arrow-down"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>This Month</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-pencil-alt fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">Purchases delivered:</span>
                        <span style="color:white;font-size:26px">5</span>
                    </div>
                    <div class="card1-3">
                            <div class="badge">
                            <div style="display:flex;flex-direction: column">
                                    <div class="triangle" style="border-color:transparent #38A5F8 transparent transparent;">

                                    </div>
                                    <div class="ctriangle" style="border-color:transparent #38A5F8 transparent transparent;"></div>
                                </div>
                                <div class="badge-text-div" style="background-color:#38A5F8"></div>
                        
                    </div>
                        <div class="card1-3-2" >
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>This Month</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-suitcase fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">Transactions Closed</span>
                        <span style="color:white;font-size:26px">37</span>
                    </div>
                    <div class="card1-3">

                        <div class="card1-3-1">
                            <div class="badge">
                                    <div style="display:flex;flex-direction: column">
                                            <div class="triangle">
    
                                            </div>
                                            <div class="ctriangle"></div>
                                        </div>
                                <div class="badge-text-div" style="background-color:#F7B432"></div>
                                
                            </div>

                        </div>
                        <div class="card1-3-2">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>For the year</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards" style="padding: 4% 0.1% 2% 30%;" style="width: 100%;" style="margin: 0 0 0 0;">
        <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-truck-loading fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">ORDERS Delivered</span>
                        <span style="color:white;font-size:26px"><?php echo "$total_recordscard1"; ?></span>
                    </div>
                    <div class="card1-3">
                            <div class="badge">
                            <div style="display:flex;flex-direction: column">
                                    <div class="triangle" style="border-color:transparent #46A39A transparent transparent;">

                                    </div>
                                    <div class="ctriangle" style="border-color: transparent #46A39A transparent transparent;"></div>
                                </div>
                                <div class="badge-text-div" style="background-color: #46A39A"></div>
                        
                    </div>
                        <div class="card1-3-2">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>This Month</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>

            </div>
            <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-clone fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">Payments recieved</span>
                        <span style="color:white;font-size:26px"><?php echo "$total_recordscard2";?></span>
                    </div>
                    <div class="card1-3">
                            <div class="badge">
                            <div style="display:flex;flex-direction: column">
                                    <div class="triangle" style="border-color:transparent #EC4961 transparent transparent;">

                                    </div>
                                    <div class="ctriangle" style="border-color:transparent #EC4961 transparent transparent;"></div>
                                </div>
                                <div class="badge-text-div" style="background-color: #EC4961"></div>
                        
                    </div>
                        <div class="card1-3-2">
                            <i style="color:EC4961" class="fas fa-arrow-down"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>This Month</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-pencil-alt fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">Purchases delivered:</span>
                        <span style="color:white;font-size:26px">5</span>
                    </div>
                    <div class="card1-3">
                            <div class="badge">
                            <div style="display:flex;flex-direction: column">
                                    <div class="triangle" style="border-color:transparent #38A5F8 transparent transparent;">

                                    </div>
                                    <div class="ctriangle" style="border-color:transparent #38A5F8 transparent transparent;"></div>
                                </div>
                                <div class="badge-text-div" style="background-color:#38A5F8"></div>
                        
                    </div>
                        <div class="card1-3-2" >
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>This Month</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-suitcase fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">Transactions Closed</span>
                        <span style="color:white;font-size:26px">37</span>
                    </div>
                    <div class="card1-3">

                        <div class="card1-3-1">
                            <div class="badge">
                                    <div style="display:flex;flex-direction: column">
                                            <div class="triangle">
    
                                            </div>
                                            <div class="ctriangle"></div>
                                        </div>
                                <div class="badge-text-div" style="background-color:#F7B432"></div>
                                
                            </div>

                        </div>
                        <div class="card1-3-2">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>For the year</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards" style="padding: 4% 0.1% 2% 30%;" style="width: 100%;" style="margin: 0 0 0 0;">
        <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-truck-loading fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">ORDERS Delivered</span>
                        <span style="color:white;font-size:26px"><?php echo "$total_recordscard1"; ?></span>
                    </div>
                    <div class="card1-3">
                            <div class="badge">
                            <div style="display:flex;flex-direction: column">
                                    <div class="triangle" style="border-color:transparent #46A39A transparent transparent;">

                                    </div>
                                    <div class="ctriangle" style="border-color: transparent #46A39A transparent transparent;"></div>
                                </div>
                                <div class="badge-text-div" style="background-color: #46A39A"></div>
                        
                    </div>
                        <div class="card1-3-2">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>This Month</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>

            </div>
            <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-clone fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">Payments recieved</span>
                        <span style="color:white;font-size:26px"><?php echo "$total_recordscard2";?></span>
                    </div>
                    <div class="card1-3">
                            <div class="badge">
                            <div style="display:flex;flex-direction: column">
                                    <div class="triangle" style="border-color:transparent #EC4961 transparent transparent;">

                                    </div>
                                    <div class="ctriangle" style="border-color:transparent #EC4961 transparent transparent;"></div>
                                </div>
                                <div class="badge-text-div" style="background-color: #EC4961"></div>
                        
                    </div>
                        <div class="card1-3-2">
                            <i style="color:EC4961" class="fas fa-arrow-down"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>This Month</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-pencil-alt fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">Purchases delivered:</span>
                        <span style="color:white;font-size:26px">5</span>
                    </div>
                    <div class="card1-3">
                            <div class="badge">
                            <div style="display:flex;flex-direction: column">
                                    <div class="triangle" style="border-color:transparent #38A5F8 transparent transparent;">

                                    </div>
                                    <div class="ctriangle" style="border-color:transparent #38A5F8 transparent transparent;"></div>
                                </div>
                                <div class="badge-text-div" style="background-color:#38A5F8"></div>
                        
                    </div>
                        <div class="card1-3-2" >
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>This Month</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="cards-block">
                <div class="card1">
                    <div class="card1-1">
                        <i class="fas fa-suitcase fa-2x"></i>
                    </div>
                    <div class="card1-2">
                        <span style="color:#9195DF;font-size:16px">Transactions Closed</span>
                        <span style="color:white;font-size:26px">37</span>
                    </div>
                    <div class="card1-3">

                        <div class="card1-3-1">
                            <div class="badge">
                                    <div style="display:flex;flex-direction: column">
                                            <div class="triangle">
    
                                            </div>
                                            <div class="ctriangle"></div>
                                        </div>
                                <div class="badge-text-div" style="background-color:#F7B432"></div>
                                
                            </div>

                        </div>
                        <div class="card1-3-2">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </div>
                </div>
                <div class="card2">
                    <div class="card2-1">
                        <div>For the year</div>
                        <div> <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>