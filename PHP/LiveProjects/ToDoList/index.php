<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>
</head>
<!-- GET THE STYLES -->
<?php include_once '../ToDoList/styles.php';  ?>

<!-- START BODY -->
<body align="center">
    <!-- START TOP NAV -->
    <nav>
        <h1>Sithembiso's TODO LIST</h1>

    </nav>
    <!-- END TOP NAV -->

    <!-- START MAIN -->
    <main align="center">

        <!-- START CRUD TOOLS -->
        <div class="tools" align="center">

            <!-- START CRUD -->
            <div class="crud" align="center">
                <!-- START CRUD TASKLIST TABLE -->
                <div class="tbl">
                    <table class="input_tbl">
                        <tbody class="input_tbl_body">
                            <tr class="input_tbl_body_tr">
                                <input type="text" placeholder="Goal ID" id="Goal_id">
                                <input type="file" placeholder="Attachements" id="Attachements">
                                <input type="text" placeholder="Goal Date" id="Goal_date">
                                <input type="text" placeholder="Estimated Duration" id="Est_duration">
                                <input type="text" placeholder="Current Duration" id="Current_duration">
                                <input type="text" placeholder="Added By" id="Added_by">
                                <input type="text" placeholder="Description" id="description">
                                <input type="text" placeholder="Type" id="type">
                                <input type="text" placeholder="Due Date" id="due_date">
                                <input type="text" placeholder="Complete" id="complete">
                                <input type="text" placeholder="comments" id="comments">
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- END CRUD TASKLIST TABLE -->

                <!-- START CRUD BUTONS -->
                <div class="crudbtns" align="center">
                    <button id="Add" style="background-color: yellowgreen; color: white;">Add Goal</button>
                    <button id="view" style="background-color: rgb(29, 29, 29); color: white;">View Goals</button>
                    <button id="update" style="background-color: orange; color: white;">Update Goal</button>
                    <button id="delete" style="background-color: red; color: white;">Delete Goal</button>
                </div>
                <!-- END CRUD BUTONS -->

            </div>
            <!-- END CRUD -->

        </div>
        <!-- END CRUD TOOLS -->

        <!-- START DISPLAY TABLE -->
        <table>
            <!-- START DISPLAY TABLE HEAD -->
            <thead>
                <tr>
                    <th>Goal ID</th>
                    <th>Attachements</th>
                    <th>Goal Date</th>
                    <th>Estimated Duration</th>
                    <th>Current Duration</th>
                    <th>Goal Added By</th>
                    <th>Goal Description</th>
                    <th>Goal Type</th>
                    <th>Goal Due Date</th>
                    <th>Complete</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <!-- END DISPLAY TABLE HEAD -->
            
            <!-- START DISPLAY TABLE BODY -->
            <tbody id="tbody">
                <!-- 1 -->
                <!-- <tr>
                    <td>ddd</td>
                    <td>ddd</td>
                    <td>ddd</td>
                    <td>ddd</td>
                    <td>ddd</td>
                    <td>ddd</td>
                    <td>ddd</td>
                    <td>ddd</td>
                    <td>ddd</td>
                    <td>ddd</td>
                    <td>ddd</td>
                </tr> -->
                <!-- 1 --> 
                
            </tbody>
            <!-- BODY DISPLAY TABLE BODY -->

        </table>
        <!-- END DISPLAY TABLE -->

    </main>
    <!-- END MAIN -->


</body>
<script>

    document.getElementById('Add').addEventListener('click',()=>{
        // console.log('clicked');
        var my_inpz = document.getElementsByTagName('input');
        // console.log(my_inpz);

        var inp_params = getInputs(my_inpz);
        // console.log(inp_params);

        showTbl(inp_params);
        // console.log('clicked');
    });

    
    // Function to show hinted names
    function showTbl(arr) {
        // Checking first if the string is not empty

        if (arr['Goal_id'] == '' && arr['Goal_date'] == '') {
            document.getElementById("tbody").innerHTML = "";
            return;

        // else if string not empty send request/responce for string to php and get back the responce string/strings
        } else {
            // Create a new xml http request to send data to a php script
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tbody").innerHTML = this.responseText;
                alert(this.responseText);
            }
            };
            xmlhttp.open("GET", "b4mysql.php?Attachements="
            +arr['Attachements']
            +'&Goal_date='+arr['Goal_date']
            +'&Est_duration='+arr['Est_duration']
            +'&Current_duration='+arr['Current_duration']
            +'&Added_by='+arr['Added_by']
            +'&description='+arr['description']
            +'&type='+arr['type']
            +'&due_date='+arr['due_date']
            +'&complete='+arr['complete']
            +'&comments='+arr['comments']
            
            , true);
            // (Goal_id, Attachements, Goal_date, Est_duration, Current_duration, Added_by, description, type, due_date, complete, comments)
            xmlhttp.send();
        }
    }





// Function to crate table cell values
    function setTableRowValues(filled_inputs) {
        // Get Reference to the table row element of the data for event setting
        var tablecells = document.getElementsByTagName('td');

        for (let index = 0; index < filled_inputs.length; index++) {
            tablecells[index].innerHTML = filled_inputs[index].value;
        }   
    }

    function getInputs(input_group_params) {

        // CREATE AN ARRAY TO HOLD ID AND INPUT VALUES
        var inputs_array = []
        // LOOP THROUGH INPUTS AND POPULATE THE NEW ARRAY with input id and values
        for (let index = 0; index < input_group_params.length; index++) {
            inputs_array[input_group_params[index].getAttribute('id')] = input_group_params[index].value;

        }   
        console.log('inpz = ',inputs_array);

        return inputs_array;
    }
    
</script>
</html>