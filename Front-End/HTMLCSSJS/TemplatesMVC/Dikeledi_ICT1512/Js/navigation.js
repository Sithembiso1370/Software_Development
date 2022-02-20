    // DEFAULT PAGE LOAD 
    // console.log("clicked.. "+ event.target.getAttribute("id"));
    var hidden_div = document.getElementById("hidden_menue_items");
    hidden_div.classList.remove("hidden_menue_items_clicked");
    // console.log("clicked.. nje");


    // send ajax request to get page School_History.html
    var xhr = new XMLHttpRequest();
    xhr.open("GET","navbar1assets/SchoolHistory.html");
    xhr.onload = function () {
        var my_article = document.getElementById("article");
        
        console.log(this.responseText);
        my_article.innerHTML = xhr.responseText;
    }
    xhr.send();







     var dest = "";
     var source = "";

        var a_tags = document.getElementsByTagName("a");
        // console.log(a_tags[0]);
        window.onload = function () {
            // send ajax request to get page School_History.html
            var xhr = new XMLHttpRequest();
            xhr.open("GET","navbar1assets/SchoolHistory.html");
            xhr.onload = function () {
                var my_article = document.getElementById("article");
                
                console.log(this.responseText);
                my_article.innerHTML = xhr.responseText;
            }
            xhr.send();
        }

        window.onload = function () {
            // send ajax request to get page School_History.html
            var xhr = new XMLHttpRequest();
            xhr.open("GET","navbar1assets/calender.html");
            xhr.onload = function () {
                var my_aside = document.getElementById("aside");
                
                // console.log(this.responseText);
                my_aside.innerHTML = xhr.responseText;
            }
            xhr.send();
        }




        for (let i = 0; i < a_tags.length; i++) {
            
            a_tags[i].addEventListener("click", ()=>{
                        var hidden_div = document.getElementById("hidden_menue_items");
                        hidden_div.classList.remove("hidden_menue_items_clicked");
                        console.log("clicked.. nje");
                    // console.log("etrageto",event.target.getAttribute("id"));

                    if(event.target.getAttribute("id") == "School_History"){
                        // console.log("clicked.. "+ event.target.getAttribute("id"));
                        var hidden_div = document.getElementById("hidden_menue_items");
                        hidden_div.classList.remove("hidden_menue_items_clicked");
                        // console.log("clicked.. nje");


                        // send ajax request to get page School_History.html
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET","navbar1assets/SchoolHistory.html");
                        xhr.onload = function () {
                            var my_article = document.getElementById("article");
                            
                            console.log(this.responseText);
                            my_article.innerHTML = xhr.responseText;
                        }
                        xhr.send();
                    }
                    else if(event.target.getAttribute("id") == "School_Times"){
                        console.log("clicked.. "+ event.target.getAttribute("id"));
                        var hidden_div = document.getElementById("hidden_menue_items");
                        hidden_div.classList.remove("hidden_menue_items_clicked");
                        console.log("clicked.. nje");

                        // send ajax request to get page School_History.html
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET","navbar1assets/School_Times.html");
                        xhr.onload = function () {
                            var my_article = document.getElementById("article");
                            
                            console.log(this.responseText);
                            my_article.innerHTML = xhr.responseText;
                        }
                        xhr.send();
                    }
                    else if(event.target.getAttribute("id") == "School_Fees"){
                        console.log("clicked.. "+ event.target.getAttribute("id"));
                        var hidden_div = document.getElementById("hidden_menue_items");
                        hidden_div.classList.remove("hidden_menue_items_clicked");
                        console.log("clicked.. nje");

                        
                        // send ajax request to get page School_History.html
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET","navbar1assets/School_Fees.html");
                        xhr.onload = function () {
                            var my_article = document.getElementById("article");
                            
                            console.log(this.responseText);
                            my_article.innerHTML = xhr.responseText;
                        }
                        xhr.send();
                    }
                    else if(event.target.getAttribute("id") == "Why_this_school"){
                        console.log("clicked.. "+ event.target.getAttribute("id"));
                        var hidden_div = document.getElementById("hidden_menue_items");
                        hidden_div.classList.remove("hidden_menue_items_clicked");
                        console.log("clicked.. nje");

                        // send ajax request to get page School_History.html
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET","navbar1assets/Why_this_school.html");
                        xhr.onload = function () {
                            var my_article = document.getElementById("article");
                            
                            console.log(this.responseText);
                            my_article.innerHTML = xhr.responseText;
                        }
                        xhr.send();
                    }
                    else if(event.target.getAttribute("id") == "school"){
                        var nav1 = document.getElementById("navigationbar1");

                        console.log("clicked.. "+ event.target.getAttribute("id"));
                        var hidden_div = document.getElementById("hidden_menue_items");
                        hidden_div.classList.toggle("hidden_menue_items_clicked");
                        // hidden_div.innerHTML = nav1.innerHTML;
                    }
                    else if(event.target.getAttribute("id") == "staff"){
                        event.preventDefault();
        

                        // Create a new xml http request to send data to a php script
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("article").innerHTML = this.responseText;
                            console.log(this.responseText);
                        }
                        };
                        xmlhttp.open("GET", "./assets/xml/staff.xml", true);
                        xmlhttp.send();  
                    }
                    else 
                    {   
                        
                        var hidden_div = document.getElementById("hidden_menue_items");
                        hidden_div.classList.remove("hidden_menue_items_clicked");
                        console.log("clicked.. nje");


                        // send ajax request to get page
                        var xhr = new XMLHttpRequest();
                        xhr.open("GET","navbar1assets/SchoolHistory.html");
                        xhr.onload = function () {
                            var my_article = document.getElementById("article");

                            my_article.innerHTML = this.responseText;
                        };
                        xhr.send();

                    }
                    
            });

        }