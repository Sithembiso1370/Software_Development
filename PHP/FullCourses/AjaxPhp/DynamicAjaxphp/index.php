<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Ajax Request Handler</title>
</head>
<body>
<!-- The goal is to Create a Dynamic Ajax request handler in html,js and PHP -->

    <div class="main" id="main">
       <!-- Tablename sq -->
        <div class="div1" id="div1">
        


        </div>

         <!-- Tablename cq -->
        <div class="div2" id="div2">


        </div>

        <!-- Tablename cpo -->
        <div class="div3" id="div3">
        <button id="send3">send</button>


        </div>

        <!-- Tablename spo -->
        <div class="div4" id="div4">


        </div>

        <!-- Tablename ci -->
        <div class="div5" id="div5">
            <div class="" id="inputgr1inputgr1">
                <label for="input1"> input1</label>
                <input type="text" name="input1" id="input1" placeholder="type here>>>">
            </div>
            <div class="" id="inputgr2inputgr2">
                <label for="input2"> input2</label>
                <input type="text" name="input2" id="input2" placeholder="type here>>>2">
            </div>
        </div>

        <!-- Tablename si -->
        <div class="div6" id="div6">


        </div>

        <!-- Tablename cdn -->
        <div class="div7" id="div7">


        </div>

    </div>
    
</body>
<script>

// window.addEventListener("load",
//         getactivetransactions
        
//     );




//     function getactivetransactions() {
        
        
//             var xmlhttp = new XMLHttpRequest();
//             xmlhttp.onreadystatechange = function() {
//                 // Item to modify div1(1)

//                 if (this.readyState == 4 && this.status == 200) {
//                     document.getElementById("div1").innerHTML = this.responseText;
                    
//                 }
//             };


//             // php script to send to send to(2) | fetchjoinrows.php
//             // Variables to send 
//             // 1 Table name 
//             // 2 dATA 
//             // Add C.R.U.D type action to perform as a variable
//             xmlhttp.open("POST","fetch/fetchjoinrows.php?table= supplier_qoutes" ,true);
//             xmlhttp.send();  

//             // get quotes issued 
//             // getquotesissued();
//             // getquotesrecieved();
//             // getpoissued();
//             // getporecieved();
//             // getinvissued();
//             // getinvrecieved();
//             // getdnissued();
//             // getdnrecieved();
//     }



let allevents = [		"abort",
        "afterprint",
        "beforeprint",
        "beforeunload",
        "blur",
        "canplay",
        "canplaythrough",
        "change",
        "click",
        "compassneedscalibration",
        "contextmenu",
        "dblclick",
        "devicelight",
        "devicemotion",
        "deviceorientation",
        "deviceorientationabsolute",
        "drag",
        "dragend",
        "dragenter",
        "dragleave",
        "dragover",
        "dragstart",
        "drop",
        "durationchange",
        "emptied",
        "ended",
        "error",
        "focus",
        "hashchange",
        "input",
        "invalid",
        "keydown",
        "keypress",
        "keyup",
        "load",
        "loadeddata",
        "loadedmetadata",
        "loadstart",
        "message",
        "mousedown",
        "mouseenter",
        "mouseleave",
        "mousemove",
        "mouseout",
        "mouseover",
        "mouseup",
        "mousewheel",
        "MSGestureChange",
        "MSGestureDoubleTap",
        "MSGestureEnd",
        "MSGestureHold",
        "MSGestureStart",
        "MSGestureTap",
        "MSInertiaStart",
        "MSPointerCancel",
        "MSPointerDown",
        "MSPointerEnter",
        "MSPointerLeave",
        "MSPointerMove",
        "MSPointerOut",
        "MSPointerOver",
        "MSPointerUp",
        "offline",
        "online",
        "orientationchange",
        "pagehide",
        "pageshow",
        "pause",
        "play",
        "playing",
        "popstate",
        "progress",
        "ratechange",
        "readystatechange",
        "reset",
        "resize",
        "scroll",
        "seeked",
        "seeking",
        "select",
        "stalled",
        "storage",
        "submit",
        "suspend",
        "timeupdate",
        "unload",
        "volumechange",
        "vrdisplayactivate",
        "vrdisplayblur",
        "vrdisplayconnect",
        "vrdisplaydeactivate",
        "vrdisplaydisconnect",
        "vrdisplayfocus",
        "vrdisplaypointerrestricted",
        "vrdisplaypointerunrestricted",
        "vrdisplaypresentchange",
        "waiting",
  ]
 console.log(allevents[0])
 
//  Global Event lister for All Event types On the window Object
 for (let i = 0; i < allevents.length; i++) {
    window.addEventListener(allevents[i],
        (event)=>{

            
            if(event.type == "click"){
                // Call Click master here 
                console.log('event type is clicked',event.type);
                console.log('event source=',event.target);
                



            }
            else{
                // console.log('........');
                // Call Master specialising in the event
                // console.log('event type is not clicked, event type =',event.type)

            }
            // document.getElementById("div1").innerHTML = "Event target is " + reteventObj(event) ;
            // console.log(event)
            // return ahjax params
            // retAjaxParams(event)

            // make border of event Obj parent red when its child is clicked
            // console.log(reteventObj(event).eventsrcObjParent);
            // reteventObj(event).eventsrcObjParent.style.border = 'red solid 4px';
        }
    );
    
}



 function reteventObj(ev) {
     let eventarray = [];
     eventarray['eventsrcObjParent'] = ev.path[1];
     eventarray['eventTrusted'] = ev.isTrusted;
     eventarray['target'] = ev.target.getAttribute("id");
     eventarray["type"] = ev.type;
     return eventarray; 
 }



// Check UI event source element and get appropriate ajax params needed for this request
function retAjaxParams(evObj) {
    let ajaxparams = [];



    if(evObj.target.getAttribute('id') == 'send3' && evObj.type == 'click')
    {
        ajaxparams = supplierquotesparams('Read');
    }
    else{
        console.log('whatever was clicked is not accounted fo | event type === ',evObj.type);
    }
    console.log(ajaxparams);
}
 

// Return params for a specific table to send with ajx http request
 function supplierquotesparams(crudtypeparam){
        let params = [];
        let phpscript = '';
        let tablename = '';
        let dataarray = [];
        let crudtype = crudtypeparam;

        phpscript = 'fetchjoinrows.php';
        tablename = 'supplier_qoutes';

        dataarray['input1'] = document.getElementById('input1').value;
        dataarray['input2'] = document.getElementById('input2').value;


        params["phpscript"] = phpscript;
        params["tablename"] = tablename;
        params["dataarray"] = dataarray;
        params["crudtype"] = crudtype;


        return params;
 }

    // function myrequest() {
        
        
    //         var xmlhttp = new XMLHttpRequest();
    //         xmlhttp.onreadystatechange = function() {
    //             // Item to modify div1(1)

    //             if (this.readyState == 4 && this.status == 200) {
    //                 document.getElementById("div1").innerHTML = this.responseText;
                    
    //             }
    //         };


    //         // php script to send to send to(2) | fetchjoinrows.php
    //         // Variables to send 
    //         // 1 Table name 
    //         // 2 dATA 
    //         // Add C.R.U.D type action to perform as a variable
    //         xmlhttp.open("POST","fetch/fetchjoinrows.php?table=supplier_qoutes" ,true);
    //         xmlhttp.send();  

    //         // get quotes issued 
    //         // getquotesissued();
    //         // getquotesrecieved();
    //         // getpoissued();
    //         // getporecieved();
    //         // getinvissued();
    //         // getinvrecieved();
    //         // getdnissued();
    //         // getdnrecieved();
    // }
    // window.document.innerHTML ="<div id='loadingicon'><H1>LOADING</H1></div>";
    //             //   document.getElementById("loadingicon").style.position = 'absolute';
    //             document.getElementById("loadingicon").style.backgroundColor = 'yellow';
    //             document.getElementById("loadingicon").style.width = '50%';
    //             document.getElementById("loadingicon").style.height = '50%';
    //             document.getElementById("loadingicon").style.top = '10%';
    //             document.getElementById("loadingicon").style.left = '15%';

</script>
</html>