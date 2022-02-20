

// Gets all transactions by table ,openclosed status,date range
function getactivetransactions() {
            
            
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mytbody1").innerHTML += this.responseText;
        }
    };
    // Range 
    var from = document.getElementById('from').value;
    var to = document.getElementById('to').value;

    console.log('from ='+from,'to ='+to);
    // table
    var tablevalue = document.getElementById('Transfilturebytable').value;

    // open or clossed
    if (document.getElementById('Transfiltureactiveclosed').value == 'open' || document.getElementById('Transfiltureactiveclosed').value == 'closed') {
        var openclosedparam = document.getElementById('Transfiltureactiveclosed').value;
    }
    else{
        var openclosedparam = 'all';
    }
    xmlhttp.open("POST","crud/fetchjoinrows2.php?table="+tablevalue+"&from="+from+ "&to="+to+"&openclosed="+openclosedparam ,true);

    xmlhttp.send(); 
}


// Creates Table headers required --
// Need to make it dynamic to create any table headers with any number of columns
function CreateTablecontainers(){

        tableheadhtml =  '<thead>';
        tableheadhtml +=  '<tr scope="row">';
        tableheadhtml +=  '<th scope="col">Attachment</th>';  
        // tableheadhtml +=  '<th scope="col">Document Name</th>';  
        tableheadhtml +=  '<th scope="col">Doc No:</th>';
        tableheadhtml +=  '<th scope="col">NTPRO ID</th>';  
        tableheadhtml +=  '<th scope="col">Description</th>'; 
        tableheadhtml +=  '<th scope="col">Supplier/Client</th>'; 
        tableheadhtml +=  '<th scope="col">Save</th>';
        // tableheadhtml +=  '<th scope="col">Deletes</th>'; 
        tableheadhtml +=  '</tr>'; 
        tableheadhtml +=  '</thead>'; 
        tableheadhtml +=  '<tbody id="mytbody1">';   
        tableheadhtml +=  '</tbody>';                            
        document.getElementById("mytable").innerHTML = tableheadhtml;
}
function CreateTablecontainers2(){

    tableheadhtml =  '<thead>';
    tableheadhtml +=  '<tr scope="row">';
    tableheadhtml +=  '<th scope="col">Attachment</th>';  
    tableheadhtml +=  '<th scope="col">Document Name</th>';  
    tableheadhtml +=  '<th scope="col">Document No:</th>';
    tableheadhtml +=  '<th scope="col">NTPRO ID</th>';  
    tableheadhtml +=  '<th scope="col">Description</th>'; 
    tableheadhtml +=  '<th scope="col">Supplier/Client</th>'; 
    tableheadhtml +=  '<th scope="col">Edit</th>';
    tableheadhtml +=  '<th scope="col">Delete</th>'; 
    tableheadhtml +=  '</tr>'; 
    tableheadhtml +=  '</thead>'; 
    tableheadhtml +=  '<tbody id="mytbody1">';   
    tableheadhtml +=  '</tbody>';                            
    document.getElementById("mytable").innerHTML = tableheadhtml;
}

function  CreateTableFooter(){

    tableheadhtml =  '<tfoot >';
    tableheadhtml +=  '<tr scope="row">';
    tableheadhtml +=  '<td scope="col" ></td>';  
    tableheadhtml +=  '<td scope="col" class="tfoot_tr">arrow left</td>';  
    tableheadhtml +=  '<td scope="col" ></td>';
    tableheadhtml +=  '<td scope="col" class="tfoot_tr">arrow right</td>';  
    tableheadhtml +=  '<td scope="col" ></td>'; 
    tableheadhtml +=  '</tr>'; 
    tableheadhtml +=  '<tfoot>';                        
    document.getElementById("mytable").innerHTML += tableheadhtml;
}



function savetransactions(tablevalues) {
     // table to add data to
    var mytable = document.getElementById('Transfilturebytable').value;

    // File value
    var files = document.getElementById("file").files;

    // Create form data for xml http ajax
    if(files.length > 0 ){
       var formData = new FormData();
       formData.append("file", files[0]);
       formData.append("table", mytable);
       formData.append("tablecolumns", tablevalues);
 
       var xhttp = new XMLHttpRequest();
 
       // Set POST method and ajax file path
       xhttp.open("POST", "crud/savetransactions.php", true);
        
       // call on request changes state
       xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
 
            var response = this.responseText;
            if(response == "1"){
               alert("Upload successfully.");
            //    +response
            }else{
               alert("File not uploaded. | Ensure file name does not have white spaces and try again.");
            }
          }
       };
 
       // Send request with data
       xhttp.send(formData);
 
    }else{
       alert("Please select a file");
    }
}



function updatetransactions(tablevalues,rowid) {
    // Declairing an xml http object for new request
    var xmlhttp = new XMLHttpRequest();

    // Executing the Onreadystate function of the xml.http object
    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            console.log('Records updated at ' + this.responseText);
            // alert('Records updated at ' + this.responseText);
            CreateTablecontainers();
            getactivetransactions() ;
        }
    };
    // table to add data to
    var mytable = document.getElementById('Transfilturebytable').value;

    xmlhttp.open("POST","crud/updatetransactions.php?table="+mytable+"&tablecolumns="+tablevalues+"&row_id="+rowid,true);
    xmlhttp.send();  
}


function createtransaction(tablevalues){
    var xmlhttp = new XMLHttpRequest();


    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            console.log('Records updated at ' + this.responseText);

            // Update records after Adding a new records
            CreateTablecontainers();
            getactivetransactions() ;
        }
    };

    // table to add data to
    var mytable = document.getElementById('Transfilturebytable').value;

    xmlhttp.open("POST","crud/createtransactions.php?table="+mytable+"&tablecolumns="+tablevalues,true);
    xmlhttp.send();  
}


function deletetransactions(dataid) {
        var xmlhttp = new XMLHttpRequest();


    xmlhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            console.log('Records Deleted at ID = ' + this.responseText);
            alert('Records Deleted at ID = ' + this.responseText());
            CreateTablecontainers();
            getactivetransactions();
        }
    };
    // table to add data to
    var mytable = document.getElementById('Transfilturebytable').value;

    xmlhttp.open("POST","crud/deletetransactions.php?table="+mytable+"&dataid="+dataid,true);
    xmlhttp.send();  
}

function createtblInputs() {
    // Create Inputs for the table
    createhtml =  '<tr>';
    createhtml +=  '<td><input type="file"  name="file" id="file"></input></td>' ;
    createhtml +=  '<td><input type="text" ></input></td>';  
    // createhtml +=  '<td><input type="text" ></input></td>';  
    createhtml +=  '<td><input type="text"></input></td>';
    createhtml +=  '<td><input type="text" ></input></td>';  
    createhtml +=  '<td><input type="text"></input></td>'; 
    createhtml +=  '<td><button type="submit" id="savebtn">SAVE</button></td>'; 
    createhtml +=  '<td></td>';   
    createhtml +=  '</tr>';                            
    document.getElementById("mytbody1").innerHTML = createhtml;
}

function createtblInputs2() {
    // Create Inputs for the table
    createhtml =  '<tr>';
    createhtml +=  '<td><input type="file"  name="file" id="file"></input></td>' ;
    createhtml +=  '<td><input type="text" ></input></td>';  
    createhtml +=  '<td><input type="text" ></input></td>';  
    createhtml +=  '<td><input type="text"></input></td>';
    createhtml +=  '<td><input type="text" ></input></td>';  
    createhtml +=  '<td><input type="text"></input></td>'; 
    createhtml +=  '<td><button type="submit" id="savebtn">SAVE</button></td>'; 
    createhtml +=  '<td></td>';   
    createhtml +=  '</tr>';                            
    document.getElementById("mytbody1").innerHTML = createhtml;
}

function editrows(editedrows){
        console.log(editedrows[0]);
        editedrows[0].innerHTML = '<input type="file" placeholder="'+editedrows[0].textContent+'"></input>';
        console.log(editedrows[1]);
        editedrows[1].innerHTML = '<input type="text" placeholder="'+editedrows[1].textContent+'"></input>';
        console.log(editedrows[2]);
        editedrows[2].innerHTML = '<input type="text" placeholder="'+editedrows[2].textContent+'"></input>';
        console.log(editedrows[3]);
        editedrows[3].innerHTML = '<input type="text" placeholder="'+editedrows[3].textContent+'"></input>';
        console.log(editedrows[4]);
        editedrows[4].innerHTML = '<input type="text" placeholder="'+editedrows[4].textContent+'"></input>';
        console.log(editedrows[5]);
        editedrows[5].innerHTML = '<input type="text" placeholder="'+editedrows[5].textContent+'"></input>';
        console.log(editedrows[6]);
        editedrows[6].innerHTML = '<button type="submit" id="updatebtn">Update</button></td';
        editedrows[7].innerHTML = '';
}



