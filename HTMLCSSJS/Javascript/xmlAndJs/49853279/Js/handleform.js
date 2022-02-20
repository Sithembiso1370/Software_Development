    // console.log("R " + calcFees("once off",3))
    function settotal() {
        var total_number = document.getElementById("total_number");
        total_number.innerHTML = "R " + calcFees();
    }
    
    window.addEventListener("click",()=>{
        settotal() 
    }
    );

    // calculate fees
    function calcFees() {
        var school_fees = 0;
        var year_fees = 1177;

        var payment_type = document.getElementById("paymentoption");
        var no_of_children = document.getElementById("no_children").value;
        // console.log(p_type.value)
        // do based on payment option
        if (payment_type.value == "once off") {
            if (no_of_children == 1) 
            {
                school_fees = year_fees*(1-0.1);
            }
            else if (no_of_children == 2)
             {
                school_fees = year_fees*(1-0.12)*no_of_children;
            }
            else if (no_of_children == 3)
             {
                school_fees = year_fees*(1-0.13)*no_of_children;
            }
            else if (no_of_children >= 4)
             {
                school_fees = year_fees*(1-0.14)*no_of_children;
            }
        }
        else if (payment_type.value == "monthly") {
            if (no_of_children == 1) 
            {
                school_fees = year_fees*(1)*no_of_children;
            }
            else if (no_of_children == 2)
             {
                school_fees = year_fees*(1-0.01)*no_of_children;
            }
            else if (no_of_children == 3)
             {
                school_fees = year_fees*(1-0.0125)*no_of_children;
            }
            else if (no_of_children == 4)
             {
                school_fees = year_fees*(1-0.015)*no_of_children;
            }
        }

        return school_fees;
    }


    

    // Input handler 
    window.addEventListener("click",()=>{
        var errors = []
        if(event.target.getAttribute("id") == "btn_Edit"){
            console.log(event.target);
            event.preventDefault();
            // btn_Edit
            // clear all fields
            my_inputs_array = [];
            otheremptyfields = 0
            // get input name  and value and store in an array

            // get select and radio button values
            my_select = document.getElementById("paymentoption").value;
            

            // get all inputs
            var my_inputs = document.querySelectorAll("input");
            // console.log(my_inputs)

            
            for(i=0; i < my_inputs.length; i++){
                my_inputs[i].value = "";
                console.log(my_inputs[i]+"  deleted...")
            }
        }
        else if(event.target.getAttribute("id") == "btn_save"){
            event.preventDefault()
            my_inputs_array = [];
            otheremptyfields = 0
            // get input name  and value and store in an array

            // get select and radio button values
            my_select = document.getElementById("paymentoption").value;
            

            // get all inputs
            var my_inputs = document.querySelectorAll("input");
            // console.log(my_inputs)

            
            for(i=0; i < my_inputs.length; i++){
                if(i == 4){
                    my_inputs_array.push(my_select);
                    my_inputs_array.push(my_inputs[i].value);
                }
                else{
                    my_inputs_array.push(my_inputs[i].value);
                }
            }

            // console.log(my_inputs_array)
            // console.log("email ",my_inputs_array[14])
            // console.log("username ",my_inputs_array[17])
            // console.log("password ",my_inputs_array[18])
            // validate inputs
            for(i=0; i < my_inputs_array.length; i++){
                // fealds to validate 14,17,18
                


                if(i == 14){
                    // validate email and note error
                    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if(my_inputs_array[i].match(mailformat))
                    {
                        // pass


                    }
                    else
                    {
                        errors.push("email error");
                    }
                }
                else if(i == 17){
                    // validate username
                    if (my_inputs_array[i] == "") {
                        errors.push("username field empty");
                    }   
                    else  if (my_inputs_array[i].length < 5){
                        errors.push("username field ahould be 5 characters or more");
                        alert("username field ahould be 5 characters or more");
                    }
                }
                else if(i == 18){
                    // validate password cookie
                    var passw=  /^[A-Za-z]\w{7,14}$/;
                    if(my_inputs_array[i].match(passw)) 
                    { 
                        
                    }
                    else  if (my_inputs_array[i].length < 8){
                        errors.push("username field ahould be 5 characters or more");
                        alert("password field ahould be 5 characters or more");
                    }
                    else
                    { 
                        //    PASS  
                        errors.push("password");

                    }
                    
                }
                else{
                    // validate all other fields
                    if (my_inputs_array[i] == "") {
                        
                        otheremptyfields += 1;
                        errors.push(otheremptyfields);

                    }   
                    else{
                        console.log(my_inputs_array[i]);
                    }
                }
            }


            profile_obj = {
                Email :  my_inputs_array[13],
                Username : my_inputs_array[17],
                Passowrd : my_inputs_array[18]
            }

            // 10.	Convert the profile object to a JSON string
            var string_password = JSON.stringify(profile_obj)


            inp_names = ["soccer","rugby","swimming","netball","paymentoption",
            "no_children","fname","lname","s_address", "compl_name",
            "suburb","town","postal_code","email_adr","phone_no",
            "day","username","password"]

            for (let i = 0; i < my_inputs_array.length -2; i++) {
                // const element = array[i];
                checkAllCookies(inp_names[i],my_inputs_array[i])     
            }


            console.log(errors.length)

            if (errors.length == 0) {
                // window.location = "/RequestquoteOutput.html";
                window.location.href = "/RequestquoteOutput.html";
                console.log(errors.length);
            } else {
                alert("Please Make sure all fealds are completed and Re-submit");
                console.log(errors.length);
            }



        }
        else if(event.target.getAttribute("type") == "checkbox" || event.target.getAttribute("type") == "checkbox"){
            if (event.target.value == 1) {
                event.target.value = 0;
            }
            else{
                event.target.value = 1;
            }
        }
        else if(event.target.getAttribute("id") == "btn_Delete"){
            event.preventDefault()
            console.log("delete = ",event.target.getAttribute("id"));

            // clear all cookies
            inp_names = ["soccer","rugby","swimming","netball","paymentoption",
            "no_children","fname","lname","s_address", "compl_name",
            "suburb","town","postal_code","email_adr","phone_no",
            "day","username","password"]

            for (let i = 0; i < inp_names.length; i++) {
                // delete each cookie
                deletecookie(inp_names[i]);   
            }
        }
        else{
            // event.preventDefault();
            console.log(event.target.getAttribute("id"))
        }
    });



    var a_tags = document.getElementsByTagName("a");
    // console.log(a_tags[0]);


    for (let i = 0; i < a_tags.length; i++) {
        
        a_tags[i].addEventListener("click", ()=>{
                    var hidden_div = document.getElementById("hidden_menue_items");
                    hidden_div.classList.remove("hidden_menue_items_clicked");
                    // console.log("clicked.. nje");
                // console.log("etrageto",event.target.getAttribute("id"));

                if(event.target.getAttribute("id") == "School_History"){
                    // console.log("clicked.. "+ event.target.getAttribute("id"));
                    var hidden_div = document.getElementById("hidden_menue_items");
                    hidden_div.classList.remove("hidden_menue_items_clicked");
                    // console.log("clicked.. nje");
                }
                else if(event.target.getAttribute("id") == "School_Times"){
                    // console.log("clicked.. "+ event.target.getAttribute("id"));
                    var hidden_div = document.getElementById("hidden_menue_items");
                    hidden_div.classList.remove("hidden_menue_items_clicked");
                    // console.log("clicked.. nje");
                }
                else if(event.target.getAttribute("id") == "School_Fees"){
                    console.log("clicked.. "+ event.target.getAttribute("id"));
                    var hidden_div = document.getElementById("hidden_menue_items");
                    hidden_div.classList.remove("hidden_menue_items_clicked");
                    // console.log("clicked.. nje");
                }
                else if(event.target.getAttribute("id") == "Why_this_school"){
                    // console.log("clicked.. "+ event.target.getAttribute("id"));
                    var hidden_div = document.getElementById("hidden_menue_items");
                    hidden_div.classList.remove("hidden_menue_items_clicked");
                    // console.log("clicked.. nje");
                }
                else if(event.target.getAttribute("id") == "school"){
                    var nav1 = document.getElementById("navigationbar1");

                    // console.log("clicked.. "+ event.target.getAttribute("id"));
                    var hidden_div = document.getElementById("hidden_menue_items");
                    hidden_div.classList.toggle("hidden_menue_items_clicked");
                    hidden_div.innerHTML = nav1.innerHTML;
                }
                else 
                {
                    var hidden_div = document.getElementById("hidden_menue_items");
                    hidden_div.classList.remove("hidden_menue_items_clicked");
                    // console.log("clicked.. nje");
                }
                
        });

    }


    // set cookie function
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
    } 
    
    function checkUserCookie(cookie_name,cookie_value) {
        let user = getCookie(cookie_name);
        if (getCookie(cookie_name) == cookie_value) 
        {
            alert("Welcome again " + user);
        } 
        else
         {
            cookie_alias = cookie_name;
            cookie_v = cookie_value
            if (user != "" && user != null) {
            setCookie(cookie_alias, cookie_v, 365);
            // console.log("yey cookie just set" + cookie_alias);
            alert("Welcome to Reagile" + user);
            }
        }
    }

    function checkAllCookies(cookie_name,cookie_value) {
        let user = getCookie(cookie_name);
        if (getCookie(cookie_name) == cookie_value) 
        {
            // console.log("This cookie exists"+ cookie_name + user);
        } 
        else
         {
            cookie_alias = cookie_name;
            cookie_v = cookie_value
            if (user != "" && user != null) {
            setCookie(cookie_alias, cookie_v, 365);
            console.log("yey cookie just set" + cookie_alias);
            // console.log("this cookie only exists now" +cookie_name + user);
            }
        }
    }

    function deletecookie(cookiename) {
        document.cookie = cookiename+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        console.log(cookiename+ "cookie deleted");
    }