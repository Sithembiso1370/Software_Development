var a_tags = document.getElementsByTagName("a");
// console.log(a_tags[0]);


for (let i = 0; i < a_tags.length; i++) {
    
    a_tags[i].addEventListener("click", ()=>{
                var hidden_div = document.getElementById("hidden_menue_items");
                hidden_div.classList.remove("hidden_menue_items_clicked");
                console.log("clicked.. nje");
            // console.log("etrageto",event.target.getAttribute("id"));

            if(event.target.getAttribute("id") == "School_History"){
                console.log("clicked.. "+ event.target.getAttribute("id"));
                var hidden_div = document.getElementById("hidden_menue_items");
                hidden_div.classList.remove("hidden_menue_items_clicked");
                console.log("clicked.. nje");
            }
            else if(event.target.getAttribute("id") == "School_Times"){
                console.log("clicked.. "+ event.target.getAttribute("id"));
                var hidden_div = document.getElementById("hidden_menue_items");
                hidden_div.classList.remove("hidden_menue_items_clicked");
                console.log("clicked.. nje");
            }
            else if(event.target.getAttribute("id") == "School_Fees"){
                console.log("clicked.. "+ event.target.getAttribute("id"));
                var hidden_div = document.getElementById("hidden_menue_items");
                hidden_div.classList.remove("hidden_menue_items_clicked");
                console.log("clicked.. nje");
            }
            else if(event.target.getAttribute("id") == "Why_this_school"){
                console.log("clicked.. "+ event.target.getAttribute("id"));
                var hidden_div = document.getElementById("hidden_menue_items");
                hidden_div.classList.remove("hidden_menue_items_clicked");
                console.log("clicked.. nje");
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