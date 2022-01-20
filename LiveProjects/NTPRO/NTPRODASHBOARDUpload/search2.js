







            // supplier purchase order
            $(document).ready(function(e){

                $("#searchinput").keyup(function(){
                
                    $("#supplierquotesextra").show();
                    var text = $(this).val();
                    $.ajax({
                        type: 'GET',
                        url: 'search.php',
                        data: 'txt=' + text,
                        success: function(data){
                            $("#supplierquotesextra").html(data);
                            console.log(data);
                        }
                    });
                
                })
                
                });



// supplier invoice 
$(document).ready(function(e){

$("#searchinput").keyup(function(){

    $("#supplierquotesextra").show();
    var text = $(this).val();
    $.ajax({
        type: 'GET',
        url: 'search.php',
        data: 'txt=' + text,
        success: function(data){
            $("#supplierquotesextra").html(data);
            console.log(data);
        }
    });

})

});



// customer invoice
$(document).ready(function(e){

    $("#searchinput").keyup(function(){
    
        $("#supplierquotesextra").show();
        var text = $(this).val();
        $.ajax({
            type: 'GET',
            url: 'search.php',
            data: 'txt=' + text,
            success: function(data){
                $("#supplierquotesextra").html(data);
                console.log(data);
            }
        });
    
    })
    
    });

    // supplier delivery note
    $(document).ready(function(e){

        $("#searchinput").keyup(function(){
        
            $("#supplierquotesextra").show();
            var text = $(this).val();
            $.ajax({
                type: 'GET',
                url: 'search.php',
                data: 'txt=' + text,
                success: function(data){
                    $("#supplierquotesextra").html(data);
                    console.log(data);
                }
            });
        
        })
        
        });


        // customer delivery note
        $(document).ready(function(e){

            $("#searchinput").keyup(function(){
            
                $("#supplierquotesextra").show();
                var text = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: 'search.php',
                    data: 'txt=' + text,
                    success: function(data){
                        $("#supplierquotesextra").html(data);
                        console.log(data);
                    }
                });
            
            })
            
            });