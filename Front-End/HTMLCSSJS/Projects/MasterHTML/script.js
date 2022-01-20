
// Take to another page on "a" link click
// window.addEventListener("load",(event)=>{

//     // Get reference to all elements with the "a" tag when the window loads
//     links = document.getElementsByTagName("a");

//     // Loop through all "a" elements and attach click event lsisteners to all 
//     for (let index = 0; index < links.length; index++) {
//         const element = links[index];

//         element.addEventListener("click",(event)=>{
//             // check if i can get the href attribute of the element
//             console.log(event.target.getAttribute("href"));

//             // prevent the default action of this event occuring
//             event.preventDefault();

//             // check to not repeat page
//             if (window.location == event.target.getAttribute("href")+".html") {
//                 alert("you shouldnt do this twice man ....");
//             }
//             else{
//                 // set the new location of my display window
//                 window.location.href = event.target.getAttribute("href")+".html" ;    
//             }
   
//         });   
//     }
// });



// =============== Display page contents inside a div ====================================
// display page contents in div on "a" link click
// document.getElementById("main").innerHTML='<object type="type/html" data="home.html" ></object>';
window.addEventListener("load",(event)=>{

    // Get reference to all elements with the "a" tag when the window loads
    links = document.getElementsByTagName("a");

    // Loop through all "a" elements and attach click event lsisteners to all 
    for (let index = 0; index < links.length; index++) {
        const element = links[index];

        element.addEventListener("click",(event)=>{
            // check if i can get the href attribute of the element
            console.log(event.target.getAttribute("href"));

            // prevent the default action of this event occuring
            event.preventDefault();

            // page to display in div
            var my_page = event.target.getAttribute("href")

            // check if we are not already displaying that
            if (document.getElementById("main").innerHTML == '<object type="text/html" data="'+my_page+'.html" ></object>') {
                alert("you shouldnt do this twice man ....")
            }
            else{
                // set the page to display within the div
                document.getElementById("main").innerHTML= '<object type="text/html" data="'+my_page+'.html" ></object>'; 
            }
      
        });   
    }
});