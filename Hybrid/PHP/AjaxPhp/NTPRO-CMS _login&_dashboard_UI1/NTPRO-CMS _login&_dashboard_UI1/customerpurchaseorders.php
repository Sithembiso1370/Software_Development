<!DOCTYPE html>
<html>
 <head>
  <title>Purchase orders</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Allerta+Stencil&family=Red+Rose:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ind.css" />
 </head>
 <body style="background-image: linear-gradient(to top, #28363d, #22323c, #1e2f3b, #192b3a, #162739, #182234, #191e2f, #1a1929, #1a141f, #160e15, #0f070b, #000000) !important;">
        <input type="checkbox" name="" id="check" />
        <header>
        <label for="check">
            <i class="fas fa-bars" id="hamburguer"></i>
        </label>
        <div class="left-area fa-3x">   
                <h3>NTPR<i class="fas fa-cog fa-spin fa-m"></i>-<span>CMS</span></h3>                      
        </div>
        <div class="right-area">
            <a href="logout.php" class="logout-btn"
                >Logout <i class="fas fa-sign-out-alt"></i
            ></a>
        </div>
    </header>
        <div  class="sidebar">
            <nav>
            <a href="Homepage.php"
                    ><i class="fas fa-desktop"></i><span>Dashboard</span></a
                >
                <hr>
                <a href="supplierqoutes.php"
                    ><i class="far fa-clipboard"></i><span>Supplier Qoutes</span></a
                >
                <a href="customerqoutes.php"
                    ><i class="far fa-clipboard"></i><span>NTPRO Qoutes</span></a
                    >
                <a href="customerpurchaseorders.php"
                    ><i class="fas fa-comments-dollar"></i><span >Recieved P/O's</span></a
                >
                <a href="supplierpurchaseorders.php"
                    ><i class="fas fa-comments-dollar"></i><span>Issued P/O's</span></a
                >               
                <a href="supplierinvoices.php"
                    ><i class="fas fa-file-invoice-dollar"></i><span>Supplier Invoices</span></a
                >
                <a href="customerinvoices.php"
                    ><i class="fas fa-file-invoice-dollar"></i><span>NTPRO Invoices</span></a
                >
                <a href="supplierdeliverynotes.php"
                    ><i class="fas fa-shipping-fast"></i><span>Supplier Delivery Notes</span></a
                >
                <a href="customerdeliverynotes.php"
                    ><i class="fas fa-shipping-fast"></i><span>NTPRO delivery-notes</span></a
                >
            </nav>
        </div>
    <hr>
  <div class="container"  style="color: whitesmoke;">
   <h3 style="padding-top: 5%;" align="center">Recieved Purchase orders</h3>
   <hr>
   <div class="card">
            <div class="card-header">Dynamic Transaction Data</div>
                <div class="card-body">
                    <div align="right" style="background-image: linear-gradient(to top, #28363d, #22323c, #1e2f3b, #192b3a, #162739, #1c273a, #22283b, #27283c, #342d3f, #3e3342, #483945, #504048);">
                    <input type="file" name="multiple_files" id="multiple_files" multiple />
                    <span class="text-muted">Only pdf file allowed</span>
                    <span id="error_multiple_files"></span>
                    </div>
                    <div align="left" class="form-group">
                        <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Type your search query here" />
                    </div>
                    <div class="table-responsive" id="image_table"  style="color: black;"> 
                    </div>
            </div>
        </div>
  </div>
 </body style="background-image: linear-gradient(to right, red , yellow);" >
</html>
<div id="qouteModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <form method="POST" id="edit_image_form">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Edit Qoute Details</h4>
    </div>

    <div class="modal-body">
     <div class="form-group">
      <label>supplier name</label>
      <input type="text" name="customer_name" id="customer_name" class="form-control" />
     </div>
     <div class="form-group">
      <label>s qoute reference</label>
      <input type="text" name="s_qoute_reference" id="s_qoute_reference" class="form-control" />
     </div>
     <div class="form-group">
      <label>order_name</label>
      <input type="text" name="purchaseorder_name" id="purchaseorder_name" class="form-control" />
     </div>
     <div class="form-group">
      <label>Order Ref number</label>
      <input type="text" name="p_order_no" id="p_order_no" class="form-control" />
     </div>
     <div class="form-group">
      <label>expected delivery date</label>
      <input type="text" name="expected_deliverydate" id="expected_deliverydate" class="form-control" />
     </div>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="purchaseorder_id" id="purchaseorder_id" value="" />
     <input type="submit" name="submit" class="btn btn-info" value="Edit" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </form>
  </div>
 </div>
</div>
<script>
$(document).ready(function(){
    load_image_data(1);

    function load_image_data(page, query = '')
    {
    $.ajax({
    url:"fetchcustomerpurchaseorders.php",
    method:"POST",
    data:{page:page, query:query},
    success:function(data)
    {
        $('#image_table').html(data);
    }
    });
    } 

    $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#search_box').val();
      load_image_data(page, query);
    });

    $('#search_box').keyup(function(){
      var query = $('#search_box').val();
      load_image_data(1, query);
    });

 
 $('#multiple_files').change(function(){
  var error_images = '';
  var form_data = new FormData();
  var files = $('#multiple_files')[0].files;
  if(files.length > 10)
  {
   error_images += 'You can not select more than 10 files';
  }
  else
  {
   for(var i=0; i<files.length; i++)
   {
    var name = document.getElementById("multiple_files").files[i].name;
    var ext = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(ext, ['pdf','gif','png','jpg','jpeg']) == -1) 
    {
     error_images += '<p>Invalid '+i+' File</p>';
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("multiple_files").files[i]);
    var f = document.getElementById("multiple_files").files[i];
    var fsize = f.size||f.fileSize;
    if(fsize > 2000000)
    {
     error_images += '<p>' + i + ' File Size is very big</p>';
    }
    else
    {
     form_data.append("file[]", document.getElementById('multiple_files').files[i]);
    }
   }
  }
  if(error_images == '')
  {
   $.ajax({
    url:"uploadcustomerpurchaseorders.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#error_multiple_files').html('<br /><label class="text-primary">Uploading...</label>');
    },   
    success:function(data)
    {
     $('#error_multiple_files').html('<br /><label class="text-success">Uploaded</label>');
     load_image_data();
    }
   });

  }
  else
  {
   $('#multiple_files').val('');
   $('#error_multiple_files').html("<span class='text-danger'>"+error_images+"</span>");
   return false;
  }
 });  

 
 $(document).on('click', '.edit', function(){
  var purchaseorder_id = $(this).attr("id");
  $.ajax({
   url:"editcustomerpurchaseorders.php",
   method:"post",
   data:{purchaseorder_id:purchaseorder_id},
   dataType:"json",
   success:function(data)
   {
    $('#qouteModal').modal('show');
    $('#purchaseorder_id').val(purchaseorder_id);
    $('#submitted_on').val(data.submitted_on);
    $('#s_qoute_reference').val(data.s_qoute_reference);
    $('#purchaseorder_name').val(data.purchaseorder_name);
    $('#expected_deliverydate').val(data.expected_deliverydate);
    $('#p_order_no').val(data.p_order_no);
   }
  });
 }); 

 $(document).on('click', '.delete', function(){
  var purchaseorder_id = $(this).attr("id");
  var purchaseorder_name = $(this).data("purchaseorder_name");
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"deletecustomerpurchaseorders.php",
    method:"POST",
    data:{purchaseorder_id:purchaseorder_id, purchaseorder_name:purchaseorder_name},
    success:function(data)
    {
     load_image_data();
     alert("file removed");
    }
   });
  }
 }); 
 
 $('#edit_image_form').on('submit', function(event){
  event.preventDefault();
  if($('#purchaseorder_name').val() == '')
  {
   alert("Enter file Name");
  }
  else
  {
   $.ajax({
    url:"updatecustomerpurchaseorders.php",
    method:"POST",
    data:$('#edit_image_form').serialize(),
    success:function(data)
    {
     $('#qouteModal').modal('hide');
     load_image_data();
     alert('file Details updated');
    }
   });
  }
 }); 
});
</script>
