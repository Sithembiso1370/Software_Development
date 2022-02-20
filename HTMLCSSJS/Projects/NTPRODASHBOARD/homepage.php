<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stylehomepage.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>

    </style> -->
</head>
<body class="">
<span class="menuIcon" id="menuIcon"></span>
        <div  class="sidebar" id="sidebar">
            <nav>
                <a href="homepage.php"
                    ><i class="fas fa-desktop"></i><span>Dashboard</span></a
                >
                <a href="transaction.php"
                    ><i class="fas fa-shipping-fast fa-lg"></i><span>Transactions</span></a
                >
            </nav>
        </div>
    <div class="main">
        <!-- top section -->
        <div class="top_section">
            <h1 align="center" class="titletext">NTPRO TRANSACTION BOARD</h1>
        </div>
         

        <!-- Issued Section -->
        <div class="issued containers" id="issued">
            <div class="headerbox">
                <h2 align="center">Documents Issued</h2>
                <div class="daterange" id="daterange">
                    <div class="fromcont" id="fromcont">
                        <input type="date" id="from">
                    </div>
                    <div class="tocont" id="tocont">
                        <input type="date" id="to">
                    </div>
                </div>
            </div>

            
            <div class="issuedmain Countmains">
                <div class="quotes boxz odd">
                    <div class="lable">
                        quotes
                    </div>
                    <div class="no_of_items no_of_itemsquotesissued no_of_items no_of_items" id="quotesissuedcount">
                        
                    </div>
                    <div class="months_sect btn-group" id="issuedquotestablename">
                        <button class="openorclosed this_m" id="issuedopenquotes"> 
                            OPEN
                        </button>
                        <button class="openorclosed last_m" id="issuedclosedquotes">
                            CLOSED
                        </button>
                    </div>  
                </div>


                <div class="purchaseorders boxz even">  
                    <div class="lable">
                        purchaseorders
                    </div>
                    <div class="no_of_items no_of_itemspoissued no_of_items no_of_items" id="posissued">
                        
                    </div>
                    <div class="months_sect btn-group" id="issuedpostablename">
                        <button class="openorclosed this_m" id="issuedopenpos">
                            OPEN
                        </button>
                        <button class="openorclosed last_m" id="issuedclosedpos">
                            CLOSED
                        </button>
                    </div> 
                </div>

                <div class="invoices boxz odd">
                    
                    <div class="lable">
                        invoices
                    </div>
                    <div class="no_of_items no_of_itemsinvoicesissued no_of_items no_of_items" id="invissued">
                        
                    </div>
                    <div class="months_sect btn-group" id="issuedinvztablename">
                        <button class="openorclosed this_m " id="issuedopeninvoices">
                            OPEN
                        </button>
                        <button  class="openorclosed last_m" id="issuedclosedinvoices">
                            CLOSED
                        </button>
                    </div> 
                    
                </div>
                <div class="delivery_notes boxz even">
                    
                    <div class="lable">
                        delivery_notes
                    </div>

                    <div class="no_of_items no_of_itemsdnissued no_of_items no_of_items" id="dnissued">
                        
                    </div>

                    <div class="months_sect btn-group" id="issueddnztablename">
                        <button class="openorclosed this_m" id="issuedopendnz">
                            OPEN
                        </button>
                        <button class="openorclosed last_m" id="issuedcloseddnz">
                            CLOSED
                        </button>
                    </div> 
                    
                </div>
            </div>
        </div>



        <!-- Recieved Section -->
        <div class="recieved containers" id="recieved">
            <div class="headerbox">
                <H2 align="center">Documents Recieved</H2>
<!-- 
                <div class="daterange" id="dateRange">
                    <select name="Transfilture" id="recievedrange">
                        <option value="1">This Year</option>
                        <option value="2">This Month</option>
                        <option value="3">last 2 Monts</option>
                        <option value="4">Custom Period</option>
                    </select>
                </div> -->
            </div>
            

            <div class="recievedmain Countmains">
                <div class="quotes boxz odd">
                    <div class="lable">
                        quotes
                    </div>
                    <div class="no_of_items no_of_itemsquotesrecieved no_of_items no_of_items" id="quotesrecievedcount">
                        
                    </div>
                    <div class="months_sect btn-group" id="recieveddnztablename">
                        <button class="openorclosed this_m" id="recievedopenquotes">
                            OPEN
                        </button>
                        <button class="openorclosed last_m" id="recievedclosedquotes">
                            CLOSED
                        </button>
                    </div>  
                </div>


                <div class="purchaseorders boxz even">  
                    <div class="lable">
                        purchaseorders
                    </div>
                    <div class="no_of_items no_of_itemsporecieved no_of_items no_of_items" id="posrecieved">
                        
                    </div>
                    <div class="months_sect btn-group" id="recieveddnztablename">
                        <button class="openorclosed this_m" id="recievedopenpos">
                            OPEN
                        </button>
                        <button class="openorclosed last_m" id="recievedclosedpos">
                            CLOSED
                        </button>
                    </div> 
                </div>

                <div class="invoices boxz odd">
                    
                    <div class="lable">
                        invoices
                    </div>
                    <div class="no_of_items no_of_itemsinvoicesrecieved no_of_items no_of_items" id="invrecieved">
                        
                    </div>
                    <div class="months_sect btn-group" id="recievedinvoicestablename">
                        <button class="openorclosed this_m" id="recievedopeninvoices">
                            OPEN
                        </button>
                        <button class="openorclosed last_m" id="recievedclosedinvoices">
                            CLOSED
                        </button>
                    </div> 
                    
                </div>
                <div class="delivery_notes boxz even">
                    
                    <div class="lable">
                        delivery_notes
                    </div>
                    <div class="no_of_items no_of_itemsdnrecieved no_of_items no_of_items"  id="dnrecieved">
                        
                    </div>
                    <div class="months_sect btn-group">
                        <button class="openorclosed this_m" id="recievedopendnz">
                            OPEN
                        </button>
                        <button class="openorclosed last_m" id="recievedopendnz">
                            CLOSED
                        </button>
                    </div> 
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Active Transactions -->
    <div class="projectsmain">
        <div align="center" class="topright" id="topright">
            <h3>Transaction Filture</h3>
            <!-- <select name="Transfilture" id="activeorclosed">
                <option value="1">ACTIVE Enquiries</option>
                <option value="2">Closed Enquiries</option>
            </select> -->

            <div class="no_of_activetrans" id="no_of_activetrans">
                2
            </div>
        </div>

        <div align="center" class="transctionstable">
            <!-- <h3>Currently Active Transactions</h3>
            <hr> -->
            <!-- <hr> -->
            <table align="center" class="table table-striped table-sm table-bordered table-responsive-sm table-active" >
                <thead>
                    <tr scope="row">
                        <th scope="col">Date Issued</th>
                        <th scope="col">Attachment</th>
                        <th scope="col">NTPRO ID</th>
                        <th scope="col">Items</th>
                        <th scope="col">Client</th>
                        <!-- <th scope="col">Items</th>
                        <th scope="col">Client</th> -->

                    </tr>
                </thead>
                <tbody id="mytbody">
                </tbody>

            </table>
        </div>
    </div>

</body>

<script>

// Preparing the Page for Use (PagePrep/LayingTheCanvas)
// 1.  - Async Get  
//         == Count of quotes issued 
//         == Count of Purchase orders issued 
//         == Count of Invoices Issued 
//         == Count of Delivery Notes issued 

//         == Count of Quotes Recieved 
//         == Count of Purchase order recieved 
//         == Count of Invoices Recieved
//         == Count of Delivery Notes Recieved

//     -


// 2.  - Async Get 
//         == Joint columns from transaction List (5) and display table 
//     -


    // window.addEventListener("click",
    //      clickfunct
    // );


    // function clickfunct(event){
    //     // .getAttribute("id")
    //     console.log(event.target.parentNode)  
    //     // // ID of the clicked button on the window
    //     alert("clicked button | "+event.target.getAttribute("id"));
    //     // // ID of the clicked buttons parent
    //     // console.log("clicked |",event.target.parentNode.getAttribute("id"));
    // }

        // var buttonz = document.getElementsByTagName('button');
// console.log(buttonz);

        // for(i = 0; i < buttonz.length ; i++)
        // {
        //     buttonz[i].addEventListener("mouseover",
        //         (event)=>{
        //             // console.log(event.target.getAttribute('class'));
        //             // console.log(event.target.getAttribute('id'));

        //             var currId = event.target.getAttribute('id');

        //             console.log("Classlist[1] =" ,document.getElementById(currId).classList[1])

        //             // console.log('from date ',document.getElementById('from').value);
        //             // console.log('To date ',document.getElementById('from').value)

        //             let openOrClosed = '';

        //             if(document.getElementById(currId).classList[1] == "this_m"){
        //                 // Do something here for closed transactions
        //                  openOrClosed = 'open';
        //             }
        //             else if(document.getElementById(currId).classList[1] == "last_m"){
        //                 // Do Something here for open transactions
        //                 openOrClosed = 'closed';
        //             }
        //             else {
        //                 openOrClosed = 'all';
        //             }

        //             // getactivetransactions(openOrClosed);
        //             getquotesissued(openOrClosed);
        //         }
        //     );

        // }


//  sidebar.addEventListener("click",
//  (event)=>{
//     var sidebar = document.getElementById('sidebar');
//     console.log(sidebar);

//  }
//  );
const menu = document.getElementById('menuIcon');
    menu.addEventListener('click',()=>{
        const sidebar = document.getElementById("sidebar");
        const menu = document.getElementById('menuIcon');
        sidebar.classList.toggle('active');
        menu.classList.toggle('active');
    });

// --------------------------------  Execute the below functions succesively ----------------------------

// <!-- ONLOAD 
    // ==============================================================================
    window.addEventListener("click",
 
        (event)=>{
            // console.log(event.target.getAttribute('class'));
            // console.log(event.target.getAttribute('id'));

            var currId = event.target.getAttribute('id');


            // console.log('from date ',document.getElementById('from').value);
            // console.log('To date ',document.getElementById('from').value)

            let openOrClosed = '';

            if(document.getElementById(currId).classList[1] == "this_m"){
                // Do something here for closed transactions
                    openOrClosed = 'open';
            }
            else if(document.getElementById(currId) == ''){
                // Do Something here for open transactions
                openOrClosed = 'all';
            }
            else if(document.getElementById(currId).classList[1] == "last_m"){
                // Do Something here for open transactions
                openOrClosed = 'closed';
            }
            else {
                openOrClosed = 'all';
            }

            getactivetransactions(openOrClosed);
            getquotesissued(openOrClosed);
            getquotesrecieved(openOrClosed);
            getporecieved(openOrClosed);
            getpoissued(openOrClosed);
            getinvissued(openOrClosed);
            getinvrecieved(openOrClosed);
            getdnissued(openOrClosed);
            getdnrecieved(openOrClosed);
            // getCountRecs(openclosedparam,"supplier_qoutes");
        }
    );

    function getCountRecs(openclosedparam,table){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("quotesissuedcount").innerHTML = this.responseText;
                console.log(this.responseText);
                document.getElementById("no_of_activetrans").innerHTML = this.responseText;
            }
        };

        // Range 
        var from = document.getElementById('from').value;
        var to = document.getElementById('to').value;

// 
        xmlhttp.open("POST","crud/fetchcountsqissued.php?table="+table+"="+from+ "&to="+to+"&openclosed="+openclosedparam ,true);
        xmlhttp.send();   
    }

// F1.
// --------------------------------  Execute to get all active transactions and Display as table in Side Table View ----------------------------
    function getactivetransactions(openclosedparam) {
        
        
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("mytbody").innerHTML = this.responseText;
                    console.log(this.responseText);   
                    document.getElementById("mytbody").innerHTML += '<div class="pagination"><span class="span1">Previous</span><span class="span2">Next</span></div>';
                }
            };

            // the range of selection
            // let range = document.getElementById('range').value;

            // Range 
            var from = document.getElementById('from').value;
            var to = document.getElementById('to').value;


            xmlhttp.open("POST","crud/fetchjoinrows.php?table=customer_qoutes&from="+from+ "&to="+to+"&openclosed="+openclosedparam ,true);
            xmlhttp.send();  

            // get quotes issued 
            

    }


// F2.
// // --------------------------------  Execute to get all Quotes Issued ----------------------------
//     // QUOTES 
    function getquotesissued(openclosedparam) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("quotesissuedcount").innerHTML = this.responseText;
                console.log(this.responseText);
                document.getElementById("no_of_activetrans").innerHTML = this.responseText;
            }
        };

        // Range 
        var from = document.getElementById('from').value;
        var to = document.getElementById('to').value;

// 
        xmlhttp.open("POST","crud/fetchcountsqissued.php?table=customer_qoutes&from="+from+ "&to="+to+"&openclosed="+openclosedparam ,true);
        xmlhttp.send();  
    }


// // F3.
// // --------------------------------  Execute to get all Quotes recieved ----------------------------

    function getquotesrecieved(openclosedparam) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("quotesrecievedcount").innerHTML = this.responseText;
                console.log(this.responseText);
            }
        };

            // the range of selection
            // let range = document.getElementById('range').value;

            // Range 
            var from = document.getElementById('from').value;
            var to = document.getElementById('to').value;


            xmlhttp.open("POST","crud/fetchcountsqissued.php?table=supplier_qoutes&from="+from+ "&to="+to+"&openclosed="+openclosedparam ,true);
            xmlhttp.send();  
    }



// // F4.
// // --------------------------------  Execute to get all Orders Issued ----------------------------

//     // PURCHASE ORDERS
    function getpoissued(openclosedparam) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("posissued").innerHTML = this.responseText;
                console.log('POs issued',this.responseText);
            }
        };

        // the range of selection
        // let range = document.getElementById('range').value;

        // Range 
        var from = document.getElementById('from').value;
        var to = document.getElementById('to').value;


        xmlhttp.open("POST","crud/fetchcountsqissued.php?table=supplier_purchaseorders&from="+from+ "&to="+to+"&openclosed="+openclosedparam ,true);
        xmlhttp.send();  
    }


// // F5.
// // --------------------------------  Execute to get all Orders Recieved ----------------------------
    function getporecieved(openclosedparam) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("posrecieved").innerHTML = this.responseText;
                console.log('pos recieved',this.responseText);
            }
        };
        // the range of selection
        // let range = document.getElementById('range').value;

        // Range 
        var from = document.getElementById('from').value;
        var to = document.getElementById('to').value;


        xmlhttp.open("POST","crud/fetchcountsqissued.php?table=customer_purchaseorders&from="+from+ "&to="+to+"&openclosed="+openclosedparam ,true);
        xmlhttp.send();  
    }



//  // =======================================================================================================================================


// // F6.
// // --------------------------------  Execute to get all invoices ----------------------------
//     // INVOICES
    
    function getinvissued(openclosedparam) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("invissued").innerHTML = this.responseText;
                // console.log(this.responseText);
            }
        };
        // the range of selection
        // let range = document.getElementById('range').value;

        // Range 
        var from = document.getElementById('from').value;
        var to = document.getElementById('to').value;


        xmlhttp.open("POST","crud/fetchcountsqissued.php?table=customer_invoices&from="+from+ "&to="+to+"&openclosed="+openclosedparam ,true);
        xmlhttp.send();  
    }


    function getinvrecieved(openclosedparam) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("invrecieved").innerHTML = this.responseText;
                // console.log(this.responseText);
            }
        };
        // the range of selection
        // let range = document.getElementById('range').value;

        // Range 
        var from = document.getElementById('from').value;
        var to = document.getElementById('to').value;


        xmlhttp.open("POST","crud/fetchcountsqissued.php?table=supplier_invoices&from="+from+ "&to="+to+"&openclosed="+openclosedparam ,true);
        xmlhttp.send();  
    }
//     // F5.
// // --------------------------------  Execute to get all Orders Issued ----------------------------
//     // =======================================================================================================================================

    // DELIVERY NOTES 
    function getdnissued(openclosedparam) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dnissued").innerHTML = this.responseText;
                console.log('DN issued',this.responseText);
            }
        };
        // the range of selection
        // let range = document.getElementById('range').value;

        // Range 
        var from = document.getElementById('from').value;
        var to = document.getElementById('to').value;


        xmlhttp.open("POST","crud/fetchcountsqissued.php?table=customer_deliverynotes&from="+from+ "&to="+to+"&openclosed="+openclosedparam ,true);
        xmlhttp.send();   
    }


    function getdnrecieved(openclosedparam) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dnrecieved").innerHTML = this.responseText;
                console.log('DN RECIEVED',this.responseText);
            }
        };
        // the range of selection
        // let range = document.getElementById('range').value;

        // Range 
        var from = document.getElementById('from').value;
        var to = document.getElementById('to').value;


        xmlhttp.open("POST","crud/fetchcountsqissued.php?table=supplier_deliverynotes&from="+from+ "&to="+to+"&openclosed="+openclosedparam ,true);
        xmlhttp.send();   
    }
        // =======================================================================================================================================

</script>
</html>
