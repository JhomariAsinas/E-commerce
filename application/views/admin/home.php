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
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
      <input type="email" class="form-control pull-right search" id="email" placeholder="Search" name="email">
</div>
<br>
  <table class="table table-condensed table-bordered">
    <thead>
      <tr>
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
              <div class="form-group">
                  <label for=file>Product Image:</label>  
                 <div class="fileinput fileinput-new" data-provides="fileinput">
                    <input type="file" name="userfile" size="20" />
                 </div>
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
  </div><div class="modal fade modalh" id="myModal" role="dialog"> 
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
                <input type="username" class="form-control search" placeholder="Enter Product Name" name="prodName">
              </div>
                <div class="form-group">
                  <label for="editlname">Product Description:</label>
                  <input type="username" class="form-control search" placeholder="Enter Product Description" name="prodDes">
                </div>
              <div class="form-group">
                <label for="sel1">Product Category (select one):</label>
                    <select class="form-control search" name="selCat">
                      <option value="Gadgets"  > Gadgets   </option>
                      <option value="Clothings"> Clothings </option>
                      <option value="Furniture"> Furniture </option>
                      <option value="Foods"    > Foods     </option>
                    </select>
              </div>
              <div class="form-group">
                 <label for="sel1">Price Range:</label>
                 <input type="number" class="form-control search" name="price" min="0" max="1000000" step="1" value="0"> 
              </div>
               <div class="form-group">
                 <label for="sel1">No of Items:</label>
                 <input type="number" class="form-control search" name="quantity" min="0" max="1000000" step="1" value="0"> 
              </div>
              <div class="form-group " id="upload_form" enctype = "multipart/form_data">
                  <label for=file>Product Image:</label>  
                 <div class="fileinput fileinput-new" data-provides="fileinput">
                    <input type="file" name="image_file" id="image_file">
                 </div>
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
                 <input type="number" class="form-control search" id="pdprice1" name="edprice" min="0" max="1000000" step="1" value="0"> 
              </div>
               <div class="form-group">
                 <label for="sel1">No of Items:</label>
                 <input type="number" class="form-control search" id="pditems1" name="edquantity" min="0" max="1000000" step="1" value="0"> 
              </div>
              <div class="form-group">
                  <label for=file>Product Image:</label>  
                 <div class="fileinput fileinput-new" data-provides="fileinput">
                    <input type="file">
                 </div>
              </div>
              <button type="submit" class="btn btn-default">Update</button>
            </form>
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

      $(document).on('submit','#freg',function(e){
         e.preventDefault();
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

      });

      $('#category').change(function(){
         var category = $('#category').val();
         showProd(category);

      });


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
                        '<td class="thead">sample</td>'+
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

      $(document).on('click','.editprod',function(){
        var prodCode  = $(this).closest('tr').find('td:eq(1)').text();
        var prodName  = $(this).closest('tr').find('td:eq(2)').text();
        var proditems = $(this).closest('tr').find('td:eq(3)').text();
        var prodprice = $(this).closest('tr').find('td:eq(4)').text();
        var proddes   = $(this).closest('tr').find('td:eq(5)').text();
        var prodcat   = $(this).closest('tr').find('td:eq(6)').text();
        
        $('#pdcode1').val(prodCode);
        $('#pdname1').val(prodName);
        $('#pddes1').val(proddes);
        $('#sel11').val(prodcat);
        $('#pdprice1').val(prodprice);
        $('#pditems1').val(proditems);
        
        $('#editModal').modal('show');
      });

    function delProduct(code){

      $.ajax({
          url: '<?php echo base_url() ?>/admin/deleteProd/'+code,
          type: 'post',
          success: function(data){
            if(data){
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
              });
              showProd("All");
            }else {
              swal("Your imaginary file is safe!");
            }
          }

      });

    }

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
                  alert("Error");
                }
                showProd(category);
              }
            });

      });

    $(document).on('click','.editdelete',function(){
         var prodCode  = $(this).closest('tr').find('td:eq(1)').text();

        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                delProduct(prodCode);

        } else {
           swal("Your imaginary file is safe!");
        }
        
      });
    });



     
  
   
 });  


  </script>
 
 



     




      