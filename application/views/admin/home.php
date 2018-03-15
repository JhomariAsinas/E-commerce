<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">E-Commerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="">Product</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setup<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="discounts">Discounts</a></li>
          <li><a href="#">Product Category</a></li>
        </ul>
      </li>
      <li class=""><a href="#">Sales Report</a></li>
    </ul>
    
     <ul class="nav navbar-nav navbar-right">
      <li><a href="logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  <div class="container">
  <h2>Products</h2>
    <select class="form-control search" id="category" name="catcat22">
        <option value="All"  > All   </option>
        <option value="Gadgets"  > Gadgets   </option>
        <option value="Clothings"> Clothings </option>
        <option value="Furniture"> Furniture </option>
        <option value="Foods"    > Foods     </option>
    </select>
  <br>
  <div class="container row">
      <button class="btn btn-primary" data-toggle = "modal" data-target = "#myModal">ADD PRODUCT</button>
      <input type="email" class="form-control pull-right search" id="inputSearch" placeholder="Search" name="email">
</div>
<br>
  <table class="table table-condensed table-bordered" id="tblProd" >
    <thead>
      <tr>
        <th style="display:none;" >Productimg</th>
        <th class="thead">Product Preview</th>
        <th class="thead">Product Code</th>
        <th class="thead">Product Name</th>
        <th class="thead">No. of Items</th>
        <th class="thead">Price</th>
        <th class="thead">Description</th>
         <th class="thead">Category</th>
        <th class="thead">Action</th>
      </tr>
    </thead>
    <tbody id = "tblBody">
    </tbody>
  </table>
</div>

<div class="modal fade modalh" id="myModal" role="dialog"> 
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Insert Product</h4>
        </div>
        <div class="modal-body">
          <div class="container">
            <form id="freg">
              <div class="form-group">
                <label for="editfname">Product Name:</label>
                <input type="username" class="form-control search" id="pdname" placeholder="Enter Product Name" name="prodName">
              </div>
                <div class="form-group">
                  <label for="editlname">Product Description:</label>
                  <input type="username" class="form-control search" placeholder="Enter Product Description" id="pddes" name="prodDes">
                </div>
              <div class="form-group">
                <label for="sel1">Product Category (select one):</label>
                    <select class="form-control search" id="sel1" name="selCat">
                      <option value="Gadgets"  > Gadgets   </option>
                      <option value="Clothings"> Clothings </option>
                      <option value="Furniture"> Furniture </option>
                      <option value="Foods"    > Foods     </option>
                    </select>
              </div>
              <div class="form-group">
                 <label for="sel1">Price Range:</label>
                 <input type="number" class="form-control search" id="pdprice" name="price" min="0" max="1000000" step="1" value="0"> 
              </div>
               <div class="form-group">
                 <label for="sel1">No of Items:</label>
                 <input type="number" class="form-control search" id="pditems" name="quantity" min="0" max="1000000" step="1" value="0"> 
              </div>
              <div class="form-group" >
                  <label for="image_file">Product Image:</label> 
                  <input type="file" name="insert_file" id="insert_file">
              </div>
              <button type="submit" class="btn btn-default">Insert</button>
            </form>
          </div>
        </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
     </div>
    </div>
  </div>

  <div class="modal fade modalh" id="editModal" role="dialog"> 
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Product</h4>
        </div>
        <div class="modal-body">
          <div class="container">
            <form id="updateProd">
              <input type="hidden" class="form-control search" id="pdcode1" name="prodCode">
              <div class="form-group">
                <label for="editfname">Product Name:</label>
                <input type="username" class="form-control search" id="pdname1" placeholder="Enter Product Name" name="edName">
              </div>
                <div class="form-group">
                  <label for="editlname">Product Description:</label>
                  <input type="username" class="form-control search" placeholder="Enter Product Description" id="pddes1" name="edDes">
                </div>
              <div class="form-group">
                <label for="sel1">Product Category (select one):</label>
                    <select class="form-control search" id="sel11" name="edselCat">
                      <option value="Gadgets"  > Gadgets   </option>
                      <option value="Clothings"> Clothings </option>
                      <option value="Furniture"> Furniture </option>
                      <option value="Foods"    > Foods     </option>
                    </select>
              </div>
              <div class="form-group">
                 <label for="sel1">Price Range:</label>
                 <input type="number" class="form-control search" id="pdprice1" name="edprice" min="0" max="1000000" step="1" value=""> 
              </div>
               <div class="form-group">
                 <label for="sel1">No of Items:</label>
                 <input type="number" class="form-control search" id="pditems1" name="edquantity" min="0" max="1000000" step="1" value=""> 
              </div>
              <div class="form-group" >
                  <label for="image_file">Product Image:</label> 
                  <input type="file" name="image_file" id="image_file">
              </div>
              <button type="submit" class="btn btn-default">Update</button>
             </form >
          </div>
        </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
     </div>
    </div>
  </div>


  <script type="text/javascript">
  $(document).ready(function(){
    showProd("All");
      //Submit Product Ajax Function
      $(document).on('submit','#freg',function(e){
         e.preventDefault();
          var pdname   = $('#pdname').val();
          var pddes    = $('#pddes').val();
          var pdprice  = $('#pdprice').val();
          var pditems  = $('#pditems').val();

          if($('#insert_file').val() == '' || pdname == '' || pddes == '' || pdprice == '0' || pditems == '0'){
             swal("Error", "You must insert product image", "error");
          }else{
             var category = $('#category').val();
            $.ajax({
              url:'<?php echo base_url(); ?>admin/insertProd',
              type: 'post',
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data){
                if(data){
                   swal("Good job!", "Product inserted Successfully", "success");
                }else{
                  alert("Error");
                }
                showProd(category);
              }
            });
          }  
      });
      //Select Category Function
      $('#category').change(function(){
         var category = $('#category').val();
         showProd(category);
      });

      //Show Product Ajax Query Function
      function showProd(data){
        $.ajax({
          type: 'post',
          url: '<?php echo base_url() ?>/admin/showSelProd/'+data,
          async: false,
          dataType: 'json',
          success: function(data){
            var html = "";
            for(var i = 0; i < data.length; i++){
                html += '<tr>' +
                        '<td class="thead" style="display:none;" >'+data[i].prod_img+'</td>'+
                        '<td class="thead"><img class="img-thumbnail" src="<?php echo base_url();?>assets/image/'+data[i].prod_img+'"></img></td>'+
                        '<td class="thead">' +data[i].prod_code+    '</td>' +
                        '<td class="thead">' +data[i].prod_name+    '</td>' +
                        '<td class="thead">' +data[i].prod_items+   '</td>' +
                        '<td class="thead">' +data[i].prod_price+   '</td>' +
                        '<td class="thead">' +data[i].prod_descrip+ '</td>' +
                        '<td class="thead">' +data[i].prod_category+'</td>' +
                        '<td class="thead"><button class="btn btn-primary editprod">Update</button>    <button class="btn btn-danger editdelete">Delete</button></td>' +
                        '</tr>' 
            }
            $('#tblBody').html(html);
          },
           error: function(){
              alert('could not load database')
           }

        });
      }
      //Transfer the data on specific row into edit modal
      $(document).on('click','.editprod',function(){
        var prodCode  = $(this).closest('tr').find('td:eq(2)').text();
        var prodName  = $(this).closest('tr').find('td:eq(3)').text();
        var proditems = $(this).closest('tr').find('td:eq(4)').text();
        var prodprice = $(this).closest('tr').find('td:eq(5)').text();
        var proddes   = $(this).closest('tr').find('td:eq(6)').text();
        var prodcat   = $(this).closest('tr').find('td:eq(7)').text();
        
        $('#pdcode1').val(prodCode);
        $('#pdname1').val(prodName);
        $('#pddes1').val(proddes);
        $('#sel11').val(prodcat);
        $('#pdprice1').val(prodprice);
        $('#pditems1').val(proditems);
        
        $('#editModal').modal('show');
      });
    //Delete Function Ajax Query
    function delProduct(code,img){
      $.ajax({
          url: '<?php echo base_url() ?>/admin/deleteProd/'+code+'/'+img,
          type: 'post',
          success: function(data){
            if(data){
              swal("Your product has been deleted!", {
                icon: "success",
              });
              showProd("All");
            }else {
              swal("Your poduct is safe!");
            }
          }

      });

    }
    //Updating Product Ajax Query
    $(document).on('submit','#updateProd',function(e){
         e.preventDefault();
            var category = "All";
            $.ajax({
              url:'<?php echo base_url(); ?>admin/updateProd',
              type: 'post',
              data: new FormData(this),
              contentType: false,
              processData: false,
              success: function(data){
                if(data){
                   swal("Good job!", "Product Updated Successfully", "success");
                   showProd("All");
                }else{
                  alert("Wow");
                }
                showProd(category);
              }
            });

      });
    //Delete button function
    $(document).on('click','.editdelete',function(){
         var prodCode  = $(this).closest('tr').find('td:eq(2)').text();
         var prodImg   = $(this).closest('tr').find('td:eq(0)').text();

        swal({
          title: "Are you sure?",
          text: "Once deleted, your product will not be available in your store!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                delProduct(prodCode,prodImg);

        } else {
           swal("Your imaginary file is safe!");
        }
        
      });
    });

    //Search script function
    $("#inputSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
        $("#tblBody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
         });
    });

 });  
</script>
 
 



     




      