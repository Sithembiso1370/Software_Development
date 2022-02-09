<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="transactions.css">
   <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  -->
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body class="">
<span class="menuIcon" id="menuIcon"></span>
        <div  class="sidebar" id="sidebar">
            <nav>
                <a href="homepage.php"
                        ><i class="fas fa-chart-area"></i><span>Dashboard</span></a
                    >
                    <a href="transaction.php"
                        ><i class="fas fa-shipping-fast fa-lg"></i><span>Transactions</span></a
                    >
                    <a href="index.php"
                        ><i class="fas fa-shipping-fast fa-lg"></i><span>LogOut</span></a
                    >
            </nav>
        </div>
        <!-- Start of main body section -->
        <div class="main" id="main">
            <!-- Top  -->
            <div class="topsect" id="topsect">

                <div class="headerlabel" align="center"><h2>NTPRO | Transactions View</h2></div>
                <div class="Crudsection">
                    <div class="crudcrud" id="crudcrud">
                        <div class="search">
                            
                            <div class="searchcont" id="searchcont">
                                <label for="searchinput" align="center"><i class="fa fa-chevron-down fa-m" aria-hidden="true">Search Below...</i></label>
                                <input type="text" name="searchinput" id="searchinput" placeholder="type Search here......?">
                            </div>
                        </div>
                        <div class="create">
                            <i class="fa fa-plus fa-2x" id="createbtn" >Add Record</i>
                            <i class="fa fa-eye fa-2x" id="Showbtn" >View Records</i>
                        </div>
                    </div>

                    <div class="crudfilture" id="crudfilture">
                        <!-- Date range -->
                        <div class="range" id="range">
                            <div class="from" >
                                <label for="from">From</label>
                                <input type="date" name="from" id='from'>
                            </div>
                            <div class="to" >
                                <label for="to">To</label>
                                <input type="date" name="to" id='to'>
                            </div>
                        </div>
                        <!-- Table param -->
                        <div class="tableparam" id="tableparam">
                            <select name="Transfilturebytable" id="Transfilturebytable">
                                <option value="customer_qoutes">Issued Quotes</option>
                                <option value="supplier_qoutes" class="select01">Recieved Quotes</option>
                                <option value="supplier_purchaseorders2">Issued Orders</option>
                                <option value="customer_purchaseorders2">Recieved Orders</option>
                                <option value="customer_invoices2">Issued Invoices</option>
                                <option value="supplier_invoices2">Recieved Invoices</option>
                                <option value="customer_deliverynotes2">Issued Delivery_Notes</option>
                                <option value="supplier_deliverynotes2">Recieved Delivery_Notes</option>
                            </select>
                        </div>
                        <!-- Other Param -->
                        <div class="othereparam" id="otherparam">

                        </div>
                        <!-- Other Param -->
                        <div class="othereparam2" id="otherparam2">
                        <select name="Transfiltureactiveclosed" id="Transfiltureactiveclosed">
                                <option value="all">ALL</option>
                                <option value="open">OPEN</option>
                                <option value="closed">CLOSED</option>  
                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mainsect" id="mainsect">
            <!-- My table -->
                <table align="center" class="table table-striped table-sm table-bordered table-responsive-sm table-active" id="mytable">
                </table>

                <div class="extradata" id="extradata">
                    <div class="sq1" id="sq1">
                        <div class="doclabel">Supplier Quote no:</div>
                        <div class="docvalue" id="supplierquotesextra"></div>
                    </div>
                    <div class="cq1" id="cq1">
                        <div class="doclabel">Customer Quote no:</div>
                        <div class="docvalue" id="customerquoteextra"></div>
                    </div>
                    <div class="spo1" id="spo1">
                        <div class="doclabel">Supplier Purchase Order no:</div>
                        <div class="docvalue" id="supplierpurchaseorderextra"></div>
                    </div>
                    <div class="cq1" id="cq1">
                        <div class="doclabel">Customer Purchase Order no:</div>
                        <div class="docvalue" id="customerpurchaseorderextra"></div>
                    </div>
                    <div class="sq1" id="sq1">
                        <div class="doclabel">Supplier Invoice no:</div>
                        <div class="docvalue" id="supplierinvoiceextra"></div>
                    </div>
                    <div class="cq1" id="cq1">
                        <div class="doclabel">Customer Invoice no:</div>
                        <div class="docvalue" id="customerinvoicesectra"></div>
                    </div>
                    <div class="sq1" id="sq1">
                        <div class="doclabel">Supplier Delivery-Note no:</div>
                        <div class="docvalue" id="supplierdeliveryextra"></div>
                    </div>
                    <div class="cq1" id="cq1">
                    <div class="doclabel">Customer Delivery-Note no:</div>
                        <div class="docvalue" id="customerdeliveryextra"></div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="transaction.js"></script>
<script src="search.js"></script>
<script>

    // Menue Icon toggle active and inactive
const menu = document.getElementById('menuIcon');
menu.addEventListener('click',()=>{
    const sidebar = document.getElementById("sidebar");
    const menu = document.getElementById('menuIcon');
    sidebar.classList.toggle('active');
    menu.classList.toggle('active');
});


// adding functionality to CRUD INITIATOR BUTTONS
window.addEventListener('click',
    (event)=>{
            switch (event.target.getAttribute('id')) {
                case 'createbtn':
                    // Header for the table
                    CreateTablecontainers();
                    // Create Inputs for the table
                    createtblInputs();
                    break;
                case 'Editbtn':
                    // edited rows
                    var editedrows = event.target.parentNode.parentNode.children ;
                    editrows(editedrows);
                    break;
                case 'savebtn':
                    var tabledata = '';
                    // LOOP through the columns in the row to get values to store
                    tabledata = ""+/([^\\]+)$/.exec(event.target.parentNode.parentNode.children[0].children[0].value)[1];
                    var Event_file = event.target.parentNode.parentNode.children[0].children[0].value;
                    for(i = 1; i < 5 ; i++ ){
                        tabledata += ','+event.target.parentNode.parentNode.children[i].children[0].value ;
                    }

                    // Save the data 
                    savetransactions(tabledata);
                    // Clear the rows
                    for(i = 0; i < 5 ; i++ ){
                        event.target.parentNode.parentNode.children[i].children[0].value = "";
                        console.log(event.target.parentNode.parentNode.children[i].children[0].value)
                    }

                    break;
                case 'updatebtn':

                    var tabledata = '';
                    // LOOP through the columns in the row to get values to store
                    tabledata = ""+/([^\\]+)$/.exec(event.target.parentNode.parentNode.children[0].children[0].value)[1];
                    for(i = 1; i < 5 ; i++ ){
                        tabledata += ','+event.target.parentNode.parentNode.children[i].children[0].value ;
                    }

                    // Save the data 
                    var dataid = event.target.parentNode.parentNode.getAttribute('id');
                    console.log("data id = "+dataid);
                    updatetransactions(tabledata,dataid);

                    // Reload data
                    CreateTablecontainers();
                    getactivetransactions();
                    
                    break;
                case 'deletebtn':
                    console.log(event.target.getAttribute('id'));
                    var promptanswer = prompt('I you sure you want to delete Y/N ?');
                    // Get the ID of the Grand Parent
                    var dataid = event.target.parentNode.parentNode.getAttribute('id');
                    console.log('Grand Parent ID = ',dataid)

                    
                    deletetransactions(dataid);
                    CreateTablecontainers2();
                    getactivetransactions() ;
                    break;
                case 'Showbtn':;

                    CreateTablecontainers2();
                    getactivetransactions() ;
                    CreateTableFooter();
                    break;

                default:
                    console.log('default actioning......');
                    break;

            }
        }

        // 7 Functions used for my Asyncronious CRUD + 8th Window Onlick method
);


window.addEventListener("load",()=>{
    CreateTablecontainers();
    setTimeout(() => {
        getactivetransactions() ;
        CreateTableFooter()
    }, 100);
    
});
</script>
</html>