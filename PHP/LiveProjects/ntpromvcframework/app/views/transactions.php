<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="transactions.css"> -->
   <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  -->
    <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Diplomata&family=Modak&family=Poller+One&family=Saira+Stencil+One&display=swap');

/* Mains First */


/* font-family: 'Diplomata', cursive;
font-family: 'Modak', cursive;
font-family: 'Poller One', cursive;
font-family: 'Saira Stencil One', cursive; */


* {
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
    transition: all 0,5s ease-in-out;
    
}

/* .menuIcon {

} */

.menuIcon{
    position: fixed;
    top: 0%;
    left: 2%;
    width: 3%;
    height: 4%;
    display: initial;
    z-index: 1000;
    background: url("img/meu_icon_open.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
    border-bottom-left-radius: 30%;
    border-bottom-right-radius: 30%;
    background-color: #a10017;
    color: #000;
    opacity: 0.8;
    transition: all 0.5s;
    z-index: 2;
}

.menuIcon.active {
    background: url("img/MENUCLOSEDBLACK.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
    background-color: red;
    color: red;
    opacity: 1;
    border-bottom-left-radius: 15%;
    border-bottom-right-radius: 15%;
    transition: all 0,5s ease-out;
}

body {
    display: block;
    height: 1080px;
    width: 100% ;
    margin: 0px;
    padding: 0px;
    background: #ccd6f4;
}

.main{

    position: relative;
    display: grid;
    gap: 5px;
    align-items: center;
    height: 1080px;
    width: 100%;
    grid-template-rows: 15% 85%;
    border-radius: 1px; 
    background: #a99d80;
    -webkit-box-shadow: 5px 5px 6px #7a715c,
    -5px -5px 6px #fff;
    box-shadow: 5px 5px 6px #7a715c,
    -5px -5px 6px #fff;
    margin-left: 1%;
    margin-right: 1%;
}

.topsect {
    position: relative;
    background-color: #D1D8EC;
    width: 100%;
    height: 170px;
    align-items: center;
    justify-content: center;
    display: grid;
    grid-template-rows: 30% 65%;
    border-radius: 3px; 
    background: #a10017;
    box-shadow: 6px 6px 11px #54000c,
    -6px -6px 11px #ee0022;
    color: white;
}

.headerlabel{
    position: relative;
    height: 100%;
    font-size: 2rem;
}

.headerlabel h2 {
    font-size: 100%;
}


.mainsect {
    position: relative;
    background: #ccd6f4;
    width: 100%;
    height: 900px;
    display: grid;
    gap: 1%;
    grid-template-columns: 78% 20%;

}

.mainsect>.extradata {
    position: relative;
    height: 1000px;
    width: 100%;
    display: grid;
    grid-template-rows: repeat(8,1fr);
    box-shadow: 5px 5px 6px 6px #969696,
    -5px -5px 6px 6px #ffffff;
    overflow: scroll;
}

div.extradata>div {
    background: #ffffff;
    height: 80%;
    width: 90%;
    margin: 2.5%;
    border-radius: 25px; 
    display: grid;
    grid-template-rows: 40% 40%;
    justify-items: center;
    text-align: center;
    font-size: 1.5rem;
}

.extradata>div>div.doclabel {
    border-bottom: 2px solid #54000c;
    background: #a10017;
    color: #fff;
    font-size: 1.6rem;
    font-weight: bold;
}
.search {
    height: 90%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

#searchcont{
    margin: 5px;
    height: 100%;
    width: 100%;
    display: grid;
    grid-template-rows: 40% 50%;
    color: black;
    font-size: 1.5rem;
}

#searchcont>#searchinput {
    height: 100%;
    width: 100%;
    text-align: center;
    font-size: 1.8rem;
    border: 2px solid #fff;
    border-bottom: 3px solid #000;
}

input:hover {
    cursor: pointer;
}

.Crudsection {
    position: relative;
    padding: 5px;
    height: 100%;
    width: 100%;
    display: grid;
    grid-template-columns: 49% 49%;
    gap: 0.5%;
    background: #ccd6f4;
    -webkit-box-shadow: 1px 1px 4px #525662,
    -1px -1px 4px #ffffff;
    box-shadow: 1px 1px 4px #525662,
    -1px -1px 4px #ffffff;
}



.crudcrud {
    display: grid;
    height:100%;
    grid-template-columns: repeat(2,50%);
    border-radius: 1px; 

}


.create {
    height: 100%;
    display: grid;
    grid-template-rows: repeat(2,50%);
    color: black;
    font-size: 1.5rem;

}

.create>#createbtn {
    background-color: #fff;
    width: 90%;
    height: 90%;
    display: flex;
    margin: 5px;
    justify-content: center; 
    align-items: center; 
    color:greenyellow ;
    font-size: 1.5rem;
    border-radius: 5px;
    box-shadow: 3px 3px 4px 4px #969696,
    3px 3px 4px 4px #d7d5d5;
}

.create>#Showbtn {
    background-color: #fff;
    width: 90%;
    height: 80%;
    display: flex;
    margin: 5px;
    justify-content: center;
    align-items: center;
    font-size: 1.5rem;
    border-radius: 5px;
    box-shadow: 3px 3px 4px 4px #969696,
    3px 3px 4px 4px #d7d5d5;
}
.crudfilture {
    height: 100%;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2,48%);
    grid-template-rows: repeat(2,48%);
    gap: 2%;
    margin: 2%;
    color: #000;
    font-weight: bold;
    font-size: 1.8rem;
    overflow: hidden;
    transition: all 1s;
}
.from {
    background-color: #fff;
    border-radius: 5px;
    height: 90%;
    color: blue;
    align-items: center;
    justify-content: center;
}

.to {
    background-color: #fff;
    border-radius: 5px;
    height: 90%;
    color: blue;
    align-items: center;
    justify-content: center;
}
.from>input {
    border: 2px solid #fff ;
    border-radius: 5px;
    font-size: 1.5rem;
}

.to>input {
    border: 2px solid #fff ;
    border-radius: 5px;
    font-size: 1.5rem;

}

.range {
    background-color: #fff;
    display: grid;
    grid-template-columns: repeat(2,50%);
    gap: 1%;
    height: 60%;
    width: 90%;
    margin: 2% 5% 5% 5%;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    box-shadow: 3px 3px 4px 4px #969696,
    3px 3px 4px 4px #d7d5d5;
}

#otherparam {
    height: 100%;
    width: 100%;
    margin-top: 8px;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
}

#range {
    height: 100%;
    width: 100%;
    border-radius: 25px; 
    font-size: 1.5rem;
}

#range>div {
    height: 100%;
    width: 90%;
    font-size: 1.5rem;
}

#range>.from {
    height: 100%;
    width: 100%;
    display: grid;
    grid-template-rows: 40% 60%;
    font-size: 1.5rem;
}

#range>.from label{
    text-align: center;
    color: #a10017;

}



#range>.to label{
    text-align: center;
    color: #a10017;
}




#range>.from>input {
    height: 100%;
    border-radius: 15px;
}
#range>.to {
    height: 100%;
    width: 100%;
    display: grid;
    grid-template-rows: 40% 60%;
    font-size: 1.5rem;
}
#range>.from>input {
    border-radius: 15px;
}



select:hover {
    cursor: pointer;
}

.tableparam>select{
    background-color: #fff;
    height: 100%;
    width: 100%;
    margin: 1%;
    font-size: 1.5rem;
    align-items: center;
    justify-content:center ;
    border-radius: 25px; 
}

.othereparam>select {
    margin-top: 1%;
    margin-bottom: 1%;
    height: 90%;
    width: 100%;
    border-radius: 25px;
    box-shadow: 5px 5px 6px #969696,
    -5px -5px 6px #ffffff;
    font-size: 1.1rem;
}

.othereparam2>select {
    height: 70%;
    width: 100%;
    margin: 2.5%;
    font-size: 1.5rem;
    align-items: center;
    justify-content:center ;
    -webkit-border-radius: 15px; 
    border-radius: 25px; 
    -webkit-box-shadow: 5px 5px 6px #969696,
    -5px -5px 6px #ffffff;
    box-shadow: 5px 5px 6px #969696,
    -5px -5px 6px #ffffff;
}

option {
    background-color: black;
    color: #fff;
    border-radius: 15px;
    opacity: 0.1;
}

table {
    padding-left: 2%;
    padding-right: 2%;
    align-self: center;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
    /* display: grid;
    grid-template-rows: 5% 90% 5%; */
    border-radius: 8px; 
    background: #ccd6f4;
    overflow: scroll;
}

#mytbody {
    position: relative;
    height: 100%;
    width: 100%;
    overflow: scroll;
}

/* thead {
    height: 50px;
} */
thead>tr{
    position: relative;
    background-color: #fff;
    height: 50px;
    width: 100%;
    display: grid;
    border: 1px solid black;
    grid-template-columns: repeat(8,12.5%);
}

 tr>th{
     position: relative;
     align-items: center;
     justify-content: center;
     height: 49px;
     width: 100%;
     text-align: center;
     display: flex;
     background: #ccd6f4;
     color: #7e0411;
     border: 1px solid #7e0411 ;
 }

 tr>th:hover {
     cursor: pointer;
     text-decoration: underline;
 }


tbody>tr{
    position: relative;
    background-color: #fff;
    height: 50px;
    width: 100%;
    display: grid;
    border: 1px solid black;
    grid-template-columns: repeat(8,12.5%);
}

tbody>tr:hover {
    background-color: #ccd6f4;
    color: #000;
}



tr>td{
    position: relative;
    align-items: center;
    justify-content: center;
    height: 49px;
    width: 100%;
    text-align: center;
    display: flex;
    background: #ccd6f4;
    color: #7e0411;
    border: 1px solid #7e0411 ;
 }

 tr>td:hover {
    text-decoration: underline #ccd6f4;
 }

 tr>td>a{
     text-decoration: dotted;
     color: #000;
     opacity: 1;
 }

 tr>td>a:hover {
     background: #ccd6f4;
     color: blue;
     font-style: italic;
     text-decoration: underline #7e0411;
 
 }

 tr>td>button {
    width: 100%;
    height: 100%;
     cursor: pointer;
 }

 
 tr>td>button:hover {
    /* border-radius: 5px; */
    cursor: pointer;
    /* transition: all 0,5s ease-in-out; */
}




 td>input{
     border-radius: 8px;
     border: 1px solid #fff;
     border-bottom: 2px solid #7e0411;
     cursor: pointer;
 }


 td>input:hover{
    border-radius: 8px;
    border: 1px solid #fff;
    border-bottom: 1px solid #7e0411;
    transition: all 0,5s ease-in;
}


 tr>td>button:hover {
    width: 100%;
    border-radius: 3px;
    transition: all 0,5s ease-in-out;
}

tfoot {
    position: relative;
    display: block;
    color: black;

}

tfoot>tr{
    position: relative;
    font-size: 2rem;
    color: black;
    height: 100%;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(5,20%);
}

.tfoot_tr {
    background-color: #ccd6f4;
    color: black;
}

.tfoot_tr:hover {
    font-size: 2rem;
}
/* 
 tr>td:hover{
      border: 4px solid #7ed321;
 } */

 #Editbtn{
     color: white;
     font-weight: bold;
     font-size: 1.4rem;
    background: #7ed321;
 }

 #Editbtn:hover{
    -webkit-border-radius: 3px; 
    border-radius: 3px; 
    transition: all 0,5s ease-in-out;
 }


 #savebtn {
     font-weight: bold;
     font-size: 1.4rem;
     color: white;
     font-weight: bold;
     font-size: 1.4rem;
    background: #7ed321;
 }

 #updatebtn {
    font-weight: bold;
    font-size: 1.4rem;
    color: white;
    font-weight: bold;
    font-size: 1.4rem;
   background: #7ed321;
}

 #deletebtn {
    font-weight: bold;
    font-size: 1.4rem;
     color: white;
    border-radius: 3px; 
    background: #f80821;
 }

 button {
     height: 100%;
     width: 100%;
     border: 3px solid #fff;
 }

 button:hover {
    border: 4px solid #7ed321;
    transition: all 0,5s ease-in-out;
}
/* tbody>tr{
    height: 100%;
    width: 100%;
} */


/* .sidebar h4 {
    color: #fff;
    font-size: 1.3rem;
    transition: all 0.5s;
} */

.sidebar nav {
    height: 100%;
    width: 100%;
    display: grid;
    padding: 1px;
    grid-template-columns: repeat(1fr,2);
}

.sidebar nav a {
    display: block;
    color: #ccd6f4;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    border-top: 1px solid rgba(225, 225, 225, 0.05);
    transition: color 2s;
    text-decoration: none;
    border: 0.5px solid #ccd6f4;
    transition: all 1.5s;
}

.sidebar nav a:hover {
    border: 1px solid red;
    background-color: red;
    color: #000;
    opacity: 0.75;
    box-shadow: 6px 6px 17px #9e0000,
    6px 6px 17px#ff0000; 
    text-decoration: underline;     
    animation-name: example;
    animation-duration: 1s;
}

/* on element animated */
/*   animation-name: example;
  animation-duration: 4s; */

/* animation */
@keyframes example {
    0%   {
        border-radius: 5% 5% 12.5% 12.5%;
        font-size: 1.1rem;
    }
    25%  {
        border-radius: 5% 5% 25% 25%;
        font-size: 1.11rem;
    }
    50%  {
        border-radius: 5% 5% 37.5% 37.5%;
        font-size: 1.12rem;
    }
    100% {
        border-radius: 5% 5% 50% 50%;
        font-size: 1.13rem;
    }
  }



i:hover {
    cursor:pointer;
}

.sidebar nav a span {
    transition: display 1s;
}



.sidebar nav a i {
    width: 30px;
    transition: all 0.5s;
}

/* #check:checked ~ .sidebar {
    left: -180px;
} */

#check:checked ~ .sidebar nav span {
    display: none;
}

#check:checked ~ .sidebar nav a {
    margin-left: 172px;
    /*font-size: 23px;*/
}

#check:checked ~ .sidebar center > h4 {
    visibility: hidden;
}

#check:checked ~ .content {
    margin-left: 70px;
}

.sidebar {
    position: fixed;
    top: 10%;
    left: -14.5%;
    width: 15%;
    height: 20%;
    border-radius: 3px solid #7e0411;
    background-color: #2f323a;
    transition: left 0.5s;
    box-shadow: 3px 0 10px #2f323a;
    z-index: 1;
    opacity: 0.7;
    transition: all 2.5s;
}

.sidebar.active {
    left: 1%;
    transition: all 1s;
}
    </style>
</head>
<body class="">
<span class="menuIcon" id="menuIcon"></span>
        <div  class="sidebar" id="sidebar">
            <nav>
                <a href="Homepage"
                        ><i class="fas fa-chart-area"></i><span>Dashboard</span></a
                    >
                    <a href="transactions"
                        ><i class="fas fa-shipping-fast fa-lg"></i><span>Transactions</span></a
                    >
                    <a href=""
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
                            <i class="fa fa-plus fa-2x" id="createbtn" ><a href="<?php  echo URLROOT;?>/pages/addtransaction">Add Record</a></i>
                            <i class="fa fa-eye fa-2x" id="Showbtn" ><a href="<?php  echo URLROOT;?>/pages/transactions">View Records</a></i>
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
                    <thead>
                        <tr scope="row">
                            <th scope="col">Date Issued</th>
                            <th scope="col">Attachment</th>
                            <th scope="col">Doc No</th>
                            <th scope="col">NTPRO ID</th>
                            <th scope="col">Items</th>
                            <th scope="col">Client</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody id="mytbody">
                    </tbody>
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
<?php       include_once '../views/functionality/transactions_js.php' ;                       ?>
<script>
// other JavaScript code before ...


// Creating a load event on theDOM
window.addEventListener("load",()=>{
    loadData();
});


// Creating a search keyUp event 
var search_inp = document.getElementById("searchinput");

search_inp.addEventListener('keyup',(event)=>{

    // // Capturing a PHP Variable into a javascript json object
    var phpvar_2_js_variable = <?= json_encode($data,JSON_HEX_TAG); ?>;

    var my_str = event.target.value;
    // var count_rows = 0;

    // First Load the table data
    LoadTableData(phpvar_2_js_variable,my_str,"mytbody");

    //  2nd Populate side nave
    var everytable = <?= json_encode($data['everything'],JSON_HEX_TAG); ?>;
    // SQ
    setSearchDiv_data(everytable[0],my_str,'supplierquotesextra','qoute_name');
    // CQ
    setSearchDiv_data(everytable[1],my_str,'customerquoteextra','qoute_name');
    // SPO
    setSearchDiv_data(everytable[2],my_str,'supplierpurchaseorderextra','order_name');
    // CPO
    setSearchDiv_data(everytable[3],my_str,'customerpurchaseorderextra','purchaseorder_name');
    // SI
    setSearchDiv_data(everytable[4],my_str,'supplierinvoiceextra','invoice_name');
    // CI
    setSearchDiv_data(everytable[5],my_str,'customerinvoicesectra','invoice_name');
    // SDN
    setSearchDiv_data(everytable[6],my_str,'supplierdeliveryextra','deliverynote_name');
    // CDN
    setSearchDiv_data(everytable[7],my_str,'customerdeliveryextra','deliverynote_name');
});



function loadData(){
        // Capturing a PHP Variable into a javascript json object
        var phpvar_2_js_variable = <?= json_encode($data,JSON_HEX_TAG); ?>;

        var table = ""; 
        for (let index = 0; index < 20; index++) {
        //  const element = array[index];
        table += "<tr scope='col'>";
        table += "<td>"+phpvar_2_js_variable['usermodel'][index]["submitted_on"] +"</td>";
        table += "<td>"+phpvar_2_js_variable['usermodel'][index]["qoute_name"] +"</td>";
        table += "<td>"+phpvar_2_js_variable['usermodel'][index]["qoute_no"] +"</td>";
        table += "<td id='ntpro_id'>"+phpvar_2_js_variable['usermodel'][index]["s_qoute_reference"] +"</td>";
        table += "<td>"+phpvar_2_js_variable['usermodel'][index]["qoute_items"] +"</td>";
        table += "<td>"+phpvar_2_js_variable['usermodel'][index]["Supplier_name"] +"</td>";
        table += "<td><button class='Editbtn'>Edit</button></td>";
        table += "<td><button class='deletebtn'>Delete</button></td>";
        table += "</tr>"
        }
        //  console.log(table);
        document.getElementById("mytbody").innerHTML = table;


        // Creating  Hover Key up event 
        // Creating a search keyUp event 
        var search_inp = document.getElementsByTagName('tr');

        var rows = [];
        for (let index = 0; index < search_inp.length; index++) {
            search_inp[index].addEventListener('mouseover',(event)=>{
                console.log(event.target.parentElement);
                if (event.target.getAttribute('id') == 'ntpro_id') {

                    
                    var everytable = <?= json_encode($data['everything'],JSON_HEX_TAG); ?>;

                    var my_str = event.target.innerHTML;
                    var count_rows = 0;

                    // SQ
                    setDiv_data(everytable[0],my_str,"supplierquotesextra",'qoute_name');  
                    // CQ
                    setDiv_data(everytable[1],my_str,"customerquoteextra",'qoute_name');  
                    // SPO
                    setDiv_data(everytable[2],my_str,"supplierpurchaseorderextra",'order_name');    
                    // CPO
                    setDiv_data(everytable[3],my_str,"customerpurchaseorderextra",'purchaseorder_name'); 
                    // SI
                    setDiv_data(everytable[4],my_str,"supplierinvoiceextra",'invoice_name'); 
                    // CI
                    setDiv_data(everytable[5],my_str,"customerinvoicesectra",'invoice_name'); 
                    // SDN
                    setDiv_data(everytable[6],my_str,"supplierdeliveryextra",'deliverynote_name'); 
                    // CDN
                    setDiv_data(everytable[7],my_str,"customerdeliveryextra",'deliverynote_name'); 

                } else {
                    console.log('hovering above UNKNOWN');
                }
                
            })
        }
}

function LoadTableData(phpvar_2_js_variable,my_str,$tbody){
    var count_rows = 0;

    var table = ""; 
     for (let index = 0; index < phpvar_2_js_variable['usermodel'].length; index++) {
        //  const element = array[index];
        if (phpvar_2_js_variable['usermodel'][index]["qoute_name"].toLowerCase().includes(my_str.toLowerCase()) || phpvar_2_js_variable['usermodel'][index]["s_qoute_reference"].toLowerCase().includes(my_str.toLowerCase()) || phpvar_2_js_variable['usermodel'][index]["qoute_items"].toLowerCase().includes(my_str.toLowerCase())) {
            count_rows += 1;
            table += "<tr scope='col' id="+'row'+count_rows+">";
            table += "<td>"+phpvar_2_js_variable['usermodel'][index]["submitted_on"] +"</td>";
            table += "<td>"+phpvar_2_js_variable['usermodel'][index]["qoute_name"] +"</td>";
            table += "<td>"+phpvar_2_js_variable['usermodel'][index]["qoute_no"] +"</td>";
            table += "<td>"+phpvar_2_js_variable['usermodel'][index]["s_qoute_reference"] +"</td>";
            table += "<td>"+phpvar_2_js_variable['usermodel'][index]["qoute_items"] +"</td>";
            table += "<td>"+phpvar_2_js_variable['usermodel'][index]["Supplier_name"] +"</td>";
            table += "<td><button class='Editbtn'>Edit</button></td>";
            table += "<td><button class='deletebtn'>Delete</button></td>";
            table += "</tr>";
        }
     }

    //  make sure only 2 rows
    if (count_rows < 20) {
        for (let index = 0; index < 20 - count_rows; index++) {
            var add_counter = 1
            table += "<tr scope='col' id="+'row'+count_rows+add_counter+">";
            table += "<td></td>";
            table += "<td></td>";
            table += "<td></td>";
            table += "<td></td>";
            table += "<td></td>";
            table += "<td></td>";
            table += "<td></td>";
            table += "<td></td>";
            table += "</tr>";   
            add_counter += 1  
        }
    }
    else if(count_rows > 20){
    }
     document.getElementById($tbody).innerHTML = table;
}

function setDiv_data(table,my_str,my_div_id,col_name){
    count_rows = 0;
    var my_doc;
    var spo_side = document.getElementById(my_div_id);

    for (let index = 0; index < table.length; index++) {

        if (table[index]["s_qoute_reference"].toLowerCase().includes(my_str.toLowerCase())) {
            count_rows += 1;
            my_doc = table[index][col_name];
            spo_side.innerHTML = '<a href='+my_doc+">"+my_doc+"</a>";
        }

    }
}


function setSearchDiv_data(everytable_index,my_str,my_div_id,col_name){
    count_rows = 0;
    var my_doc;

    for (let index = 0; index < everytable_index.length; index++) {

        if (everytable_index[index][col_name].toLowerCase().includes(my_str.toLowerCase()) || everytable_index[index]["s_qoute_reference"].toLowerCase().includes(my_str.toLowerCase())) {
            count_rows += 1;
            // console.log("supplier quotes length = ",everytable[2][index]['purchaseorder_name']);
            var my_doc = everytable_index[index][col_name]
            var my_div = document.getElementById(my_div_id);
            my_div.innerHTML = my_doc;
        }
    }
}

</script>
</html>