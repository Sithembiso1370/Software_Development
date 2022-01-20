


        // Get input values on button click function
        function getinpvalues(){

            //Accessing the input values from my DOM
            let subtotalinp = document.getElementById('subtotalinp').value;
            // console.log("subtotalinp | ",subtotalinp);
            let taxrate = document.getElementById('taxrate').value;
            // console.log("tax rate |",taxrate);
            let salestax = document.getElementById('salestax').value;
            // console.log("salestax |", salestax)
            let totalinp = document.getElementById('totalinp').value;
            // console.log("totalinp |",totalinp)

            //Make array to hold the input values
            let inputsarr = [];
            inputsarr.push(subtotalinp);
            inputsarr.push(taxrate);
            inputsarr.push(salestax);
            inputsarr.push(totalinp);

            return inputsarr;
        }

//  A variable that holds other functions and Variables
//  Children = var name and var themyfunct()
// var myvar = {
//     name : "Sthe",
//    themyfunct :()=>{
//         // console.log("helloe");
//         // // displays
//         // let display1 = document.getElementsByClassName("display1");
//         // let display2 = document.getElementsByClassName("display2");
//         // console.log(display1);


//         // display1.textContent = "display1";


//         // // form important elements
//         // let mybtn = document.getElementById("btn");
//         // let myform = document.getElementsByTagName("form");
//         return "hello my funct";
//     }

// }

// console.log(myvar.name);
// console.log(myvar.themyfunct);

            // console.log("helloe");
        // displays
        // let display1 = document.getElementsByClassName("display1");
        // let display2 = document.getElementsByClassName("display2");
        // // console.log(display1);


        // display1.textContent = "display1";


        // // form important elements
        // let mybtn = document.getElementById("btn");
        // let myform = document.getElementsByTagName("form");


        // // var subtvalue = document.getElementById("subtotalinp").value();
             

        // mybtn.addEventListener("click",

        // console.log(document.getElementById("subtotalinp").)
        // );
