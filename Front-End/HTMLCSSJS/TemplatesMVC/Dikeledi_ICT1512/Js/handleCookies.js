
console.log(getCookie("password"));



inp_names = ["soccer","rugby","swimming","netball","paymentoption",
"no_children","fname","lname","s_address", "compl_name",
"suburb","town","postal_code","email_adr","phone_no",
"day","username","password"]

for (let i = 0; i < inp_names.length; i++) {
    // delete each cookie
    getCookie(inp_names[i]);
}





        var x = document.cookie;
        my_cookies = x.split(",");


        div0 = document.getElementById("designations0");
        div1 = document.getElementById("designations1");
        div2 = document.getElementById("designations2");
        div3 = document.getElementById("designations3");
        div4 = document.getElementById("designations4");
        div5 = document.getElementById("designations5");
        div1.innerHTML = "Welccome " + getCookie("username");
        div3.innerHTML = "Your Credentials : ";
        div4.innerHTML = "Password = " + getCookie("password");
        div5.innerHTML = "Username = " + getCookie("username");
    // window.addEventListener("mouseover",()=>{
    //     var x = document.cookie;
    //     my_cookies = x.split(",");


    //     div0 = document.getElementById("designations0");
    //     div1 = document.getElementById("designations1");
    //     div2 = document.getElementById("designations2");
    //     div3 = document.getElementById("designations3");
    //     div4 = document.getElementById("designations4");
    //     div5 = document.getElementById("designations5");
    //     div1.innerHTML = "Welccome " + getCookie("username");
    //     div3.innerHTML = "Your Credentials : ";
    //     div4.innerHTML = "Password = " + getCookie("password");
    //     div5.innerHTML = "Username = " + getCookie("username");
    // }
    // );

    


    

        var a_tags = document.getElementsByTagName("a");


        for (let i = 0; i < a_tags.length; i++) {
            
            a_tags[i].addEventListener("click", ()=>{
                    // console.log("etrageto",event.target.getAttribute("id"));

                    if(event.target.getAttribute("id") == "School_History"){
                        console.log("clicked.. "+ event.target.getAttribute("id"));
                    }
                    else if(event.target.getAttribute("id") == "School_Times"){
                        console.log("clicked.. "+ event.target.getAttribute("id"));
                    }
                    else if(event.target.getAttribute("id") == "School_Fees"){
                        console.log("clicked.. "+ event.target.getAttribute("id"));
                    }
                    else if(event.target.getAttribute("id") == "Why_this_school"){
                        console.log("clicked.. "+ event.target.getAttribute("id"));
                    }
                    else if(event.target.getAttribute("id") == "school"){
                        var nav1 = document.getElementById("navigationbar1");

                        console.log("clicked.. "+ event.target.getAttribute("id"));
                        var hidden_div = document.getElementById("hidden_menue_items");
                        hidden_div.classList.toggle("hidden_menue_items_clicked");
                        hidden_div.innerHTML = nav1.innerHTML;
                    }
                    else 
                    {
                        var hidden_div = document.getElementById("hidden_menue_items");
                        hidden_div.classList.remove("hidden_menue_items_clicked");
                        console.log("clicked.. nje");
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
            console.log("yey cookie just set" + cookie_alias);
            alert("Welcome to Reagile" + user);
            }
        }
    }

    function checkAllCookies(cookie_name,cookie_value) {
        let user = getCookie(cookie_name);
        if (getCookie(cookie_name) == cookie_value) 
        {
            console.log("This cookie exists"+ cookie_name + user);
            document.cookie = cookie_name +"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            setCookie(cookie_alias, cookie_v, 365);
            console.log("yey cookie just set after delete" +  cookie_name);
            console.log("this cookie only exists now" +cookie_name + user);
        } 
        else
         {
            cookie_alias = cookie_name;
            cookie_v = cookie_value
            if (user != "" && user != null) {
            setCookie(cookie_alias, cookie_v, 365);
            console.log("yey cookie just set" + cookie_alias);
            console.log("this cookie only exists now" +cookie_name + user);
            }
        }
    }