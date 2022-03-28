<?php 
session_start()

?>
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
        <link rel="preconnect" href="https://fonts.gstatic.com"><link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Allerta+Stencil&family=Red+Rose:wght@300;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        
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
            <div class="left-area fa-3x">
                <h3>NTPR<i class="fas fa-cog fa-spin fa-m"></i>-<span>CMS</span></h3>            
            </div>
            <div class="right-area">
                <a href="logout.php" class="logout-btn"
                    >Logout <i class="fas fa-sign-out-alt"></i
                ></a>
            </div>
        </header>
        <div  class="sidebar">
            <nav>
                <a href="Homepage.php"
                    ><i class="fas fa-desktop"></i><span>Dashboard</span></a
                >
                <hr>
                <a href="supplierqoutes.php"
                    ><i class="far fa-clipboard fa-lg"></i><span>Supplier Qoutes</span></a
                >
                <a href="customerqoutes.php"
                    ><i class="far fa-clipboard fa-lg"></i><span>NTPRO Qoutes</span></a
                    >
                <a href="customerpurchaseorders.php"
                    ><i class="fas fa-comments-dollar fa-lg"></i><span >Recieved P/O's</span></a
                >
                <a href="supplierpurchaseorders.php"
                    ><i class="fas fa-comments-dollar fa-lg"></i><span>Issued P/O's</span></a
                >               
                <a href="supplierinvoices.php"
                    ><i class="fas fa-file-invoice-dollar fa-lg"></i><span>Supplier Invoices</span></a
                >
                <a href="customerinvoices.php"
                    ><i class="fas fa-file-invoice-dollar fa-lg"></i><span>NTPRO Invoices</span></a
                >
                <a href="supplierdeliverynotes.php"
                    ><i class="fas fa-shipping-fast fa-lg"></i><span>Supplier DeliveryNotes</span></a
                >
                <a href="customerdeliverynotes.php"
                    ><i class="fas fa-shipping-fast fa-lg"></i><span>NTPRO deliveryNotes</span></a
                >



            </nav>
        </div>
    <hr>
        <div class="cards" style="padding: 6% 0.1% 2% 30%;" style="width: 100%;" style="margin: 0 0 0 0;">
        <?php 
        //Cart not yet auto filtering
            $connect = new PDO('mysql:host=localhost;dbname=ntpro_db', 'root', '');
            function get_total_rowsdelivered($connect)
            {
              $query1 = "
              SELECT * FROM `customer_deliverynotes WHERE 1` 
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

            function get_total_rowscuspaid($connect)
            {
              $query3 = "
              SELECT * FROM `costumers` WHERE `Customer_Paid` is NOT NULL and 
              trim(coalesce(Customer_Paid, '')) = 'yes'
              ";
              $statement = $connect->prepare($query3);
              $statement->execute();
              return $statement->rowCount();
            }
            $total_recordscard3 = get_total_rowscuspaid($connect);

            function get_total_rowscupaid($connect)
            {
              $query4 = "
              SELECT * FROM `costumers` WHERE `Customer_Paid` is NOT NULL and 
              trim(coalesce(Customer_Paid, '')) = 'yes'
              ";
              $statement = $connect->prepare($query4);
              $statement->execute();
              return $statement->rowCount();
            }
            $total_recordscard4 = get_total_rowscupaid($connect);
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
                        <span style="color:white;font-size:26px"><?php echo "$total_recordscard3"; ?></span>
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
                        <span style="color:white;font-size:26px"><?php echo "$total_recordscard4"; ?></span>
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
        <hr>
        <div style="padding: 5% 0.1% 2% 10%;" style="width: 100%;" style="margin: 0 0 0 0;">
            <div class="container">
                <h3 align="center" style="color: white !important;">Search Recent transactions by typing column feald value </h3>
                <br />
                <div class="card">
                    <div class="card-header">Dynamic Transaction Data</div>
                    <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Type your search query here" />
                    </div>
                    <div class="table-responsive" id="dynamic_content" style="margin: 1% 0 1% 1%;">
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>
<script>
  $(document).ready(function(){

    load_data(1);

    function load_data(page, query = '')
    {
      $.ajax({
        url:"fetchalltransactions.php",
        method:"POST",
        data:{page:page, query:query},
        success:function(data)
        {
          $('#dynamic_content').html(data);
        }
      });
    }

    $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#search_box').val();
      load_data(page, query);
    });

    $('#search_box').keyup(function(){
      var query = $('#search_box').val();
      load_data(1, query);
    });

  });
</script>