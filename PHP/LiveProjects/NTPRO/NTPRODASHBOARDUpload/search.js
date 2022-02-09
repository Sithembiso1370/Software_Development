

//  supplier quotes
// $(document).ready(function(e){

//     $("#searchinput").keyup(function(){
//         var text = new Array();
    
//         $("#supplierquotesextra").show();
//         text[0] = $(this).val();
//         text[1] = "supplier_qoutes";
//         text[2] = "qoute_items";
//         // text[3] = "qoute_name";
//         // console.log(text)

//         $.ajax({
//             type: 'GET',
//             url: 'search.php',
//             data: 'text=' + text,
//             success: function(data){
//                 $("#supplierquotesextra").html(data);
//                 console.log(data);
//             }
//         });
    
//     })
    
// });

    // customer quotes
// $(document).ready(function(e){

//     $("#searchinput").keyup(function(){
//         var text = new Array();
    
//         $("#customerquoteextra").show();
//         text[0] = $(this).val();
//         text[1] = "customer_qoutes";
//         text[2] = "qoute_items";
//         // text[3] = "qoute_name";

//         $.ajax({
//             type: 'GET',
//             url: 'search.php',
//             data: 'text=' + text,
//             success: function(data){
//                 $("#customerquoteextra").html(data);
//                 console.log(data);
//             }
//         });
    
//     })
        
// });

var reference = '';

// get reference
// universal reference
$(document).ready(function(e){


    $("#searchinput").keyup(function(){
        // var reference = ''
        var text = new Array();
    
        $("#customerquoteextra").show();
        text[0] = $(this).val();
        text[1] = "customer_qoutes";
        text[2] = "qoute_items";
        // text[3] = "qoute_name";

        $.ajax({
            type: 'GET',
            url: 'searchref.php',
            data: 'text=' + text,
            success: function(data){
                if(data == ""){
                    reference = "could not find reference";
                }
                else{
                    reference = data;
                    console.log(data);          
                }
            }
        });

        // console.log("refrence =", reference); 
        //1.  get supplier quote ajax
        $("#supplierquotesextra").show();
        text[0] = reference;
        text[1] = "supplier_qoutes";
        text[2] = "s_qoute_reference";
        $.ajax({
            type: 'GET',
            url: 'searchbyid.php',
            data: 'text=' + text,
            success: function(data){
                if(data == ""){
                    my_html = '<a href="files/'+data+'" >'+data+'</a>';
                    $("#supplierquotesextra").html("no document found !");
                }
                else{
                    my_html = '<a href="files/'+data+'" >'+data+'</a>';
                    $("#supplierquotesextra").html(my_html);
                    // console.log(data);          
                }
            }
        });
        //2.  get customer quote ajax
                //1.  get supplier quote ajax
                $("#customerquoteextra").show();
                text[0] = reference;
                text[1] = "customer_qoutes";
                text[2] = "s_qoute_reference";
                $.ajax({
                    type: 'GET',
                    url: 'searchbyid.php',
                    data: 'text=' + text,
                    success: function(data){
                        if(data == ""){
                            my_html = '<a href="files/'+data+'" >'+data+'</a>';
                            $("#customerquoteextra").html("no document found !");
                        }
                        else{
                            my_html = '<a href="files/'+data+'" >'+data+'</a>';
                            $("#customerquoteextra").html(my_html);
                            // console.log(data);          
                        }
                    }
                });
        //3.  get supplier order ajax
                //1.  get supplier quote ajax
                // $("#supplierquotesextra").show();
                // text[0] = reference;
                // text[1] = "supplier_qoutes";
                // text[2] = "s_qoute_reference";
                // $.ajax({
                //     type: 'GET',
                //     url: 'searchbyid.php',
                //     data: 'text=' + text,
                //     success: function(data){
                //         if(data == ""){
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //         }
                //         else{
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //             // console.log(data);          
                //         }
                //     }
                // });


        //4.  get customer order ajax
                //1.  get supplier quote ajax
                // $("#supplierquotesextra").show();
                // text[0] = reference;
                // text[1] = "supplier_qoutes";
                // text[2] = "s_qoute_reference";
                // $.ajax({
                //     type: 'GET',
                //     url: 'searchbyid.php',
                //     data: 'text=' + text,
                //     success: function(data){
                //         if(data == ""){
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //         }
                //         else{
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //             // console.log(data);          
                //         }
                //     }
                // });

        //5.  get supllier invoice ajax
                //1.  get supplier quote ajax
                // $("#supplierquotesextra").show();
                // text[0] = reference;
                // text[1] = "supplier_qoutes";
                // text[2] = "s_qoute_reference";
                // $.ajax({
                //     type: 'GET',
                //     url: 'searchbyid.php',
                //     data: 'text=' + text,
                //     success: function(data){
                //         if(data == ""){
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //         }
                //         else{
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //             // console.log(data);          
                //         }
                //     }
                // });

        //6.  get customer quote ajax
                //1.  get supplier quote ajax
                // $("#supplierquotesextra").show();
                // text[0] = reference;
                // text[1] = "supplier_qoutes";
                // text[2] = "s_qoute_reference";
                // $.ajax({
                //     type: 'GET',
                //     url: 'searchbyid.php',
                //     data: 'text=' + text,
                //     success: function(data){
                //         if(data == ""){
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //         }
                //         else{
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //             // console.log(data);          
                //         }
                //     }
                // });

        //7.  get supplier deliverynote ajax
                //1.  get supplier quote ajax
                // $("#supplierquotesextra").show();
                // text[0] = reference;
                // text[1] = "supplier_qoutes";
                // text[2] = "s_qoute_reference";
                // $.ajax({
                //     type: 'GET',
                //     url: 'searchbyid.php',
                //     data: 'text=' + text,
                //     success: function(data){
                //         if(data == ""){
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //         }
                //         else{
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //             // console.log(data);          
                //         }
                //     }
                // });

        //8.  get customer deliverynote ajax
                //1.  get supplier quote ajax
                // $("#supplierquotesextra").show();
                // text[0] = reference;
                // text[1] = "supplier_qoutes";
                // text[2] = "s_qoute_reference";
                // $.ajax({
                //     type: 'GET',
                //     url: 'searchbyid.php',
                //     data: 'text=' + text,
                //     success: function(data){
                //         if(data == ""){
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //         }
                //         else{
                //             my_html = '<a href="files/'+data+'" >'+data+'</a>';
                //             $("#supplierquotesextra").html(my_html);
                //             // console.log(data);          
                //         }
                //     }
                // });





    
    })

        
});


    // reference = data;
    // // console.log(data)
    // text[0] = data;
    // text[1] = "customer_purchaseorders";
    // text[2] = "s_qoute_reference";
    // text[3] = "purchaseorder_name";
    //     $.ajax({
    //     type: 'GET',
    //     url: 'search.php',
    //     data: 'text=' + text,
    //     success: function(data){
    //         $("#customerpurchaseorderextra").html(data);
    //         console.log(data);
    //     }
    // });





// customer purchase order 
// $(document).ready(function(e){

//     $("#searchinput").keyup(function(){
//         var text = new Array();
    
//         $("#supplierquotesextra").show();
//         text[0] = $(this).val();
//         text[1] = "customer_purchaseorders";
//         text[2] = "purchaseorder_name";
//         $.ajax({
//             type: 'GET',
//             url: 'search.php',
//             data: 'txt=' + text,
//             success: function(data){
//                 $("#customerpurchaseorderextra").html(data);
//                 console.log(data);
//             }
//         });
    
//     })
    
//     });