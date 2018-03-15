<div class="jumbotron">
  <div class="container text-center">
    <h1>CHOPSHOP</h1>      
   <p>Shop Shop Shop</p>
  </div>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="store">E-commerce</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=""><a href="store">Home</a></li>
        <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gadgets<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="clothings">Clothing Items</a></li>
            <li><a href="furniture">Furniture Items</a></li>
            <li><a href="food">Food Items</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin/index"><span class="glyphicon glyphicon-user"></span> Admin Site</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container">
  <div class="container row">
  <img src="<?php echo base_url();?>/assets/design/techhead.png" style="margin-left: 10px" ></img>
  </div>
  <div class="container row">
      <input type="text" class="form-control pull-right search" id="search" placeholder="Search" name="email">
</div>
<br>
  <table class="table table-condensed table-bordered">
    <thead>
      <tr>
        <th style="display:none;" >Productimg</th>
        <th class="thead">Product Preview</th>
        <th class="thead">Product Code</th>
        <th class="thead">Product Name</th>
        <th class="thead">No. of Items</th>
        <th class="thead">Price</th>
        <th class="thead">Description</th>
        <th class="thead">Action</th>
      </tr>
    </thead>
    <tbody id = "tblBody">
    </tbody>
  </table>
</div>

 <!-- Modal -->
  <div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body" id="modalBody" >
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    showGad();
    function showGad() {
      $.ajax({
          type: 'post',
          url: '<?php echo base_url() ?>/main/getGad',
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
                        '<td class="thead"><button class="btn btn-danger modalcart" >Add to Cart</button>' +
                        '</tr>' 
            }
            $('#tblBody').html(html);
          },
           error: function(){
              alert('could not load database')
           }

        });
    }

     $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
          $("#tblBody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
    });


    $(document).on('click','.modalcart',function(){
        var prodimg  =  $(this).closest('tr').find('td:eq(0)').text();
        var prodname =  $(this).closest('tr').find('td:eq(3)').text();
        var proddes  =  $(this).closest('tr').find('td:eq(6)').text();
        var prodquan =  $(this).closest('tr').find('td:eq(4)').text();
        var html     =  '<div class="row">' +
                            '<div class="col-sm-2">' +
                              '<img class="img-thumbnail thead" src="<?php echo base_url(); ?>assets/image/'+prodimg+'">' +
                            '</div>' +
                            '<div class="col-sm-8">' +
                              '<h4>Product Name:<span style="font-size: 20px;" ><b> '+prodname+'</b></span></h4>' +
                              '<h4>Product Description:<span style="font-size: 20px;" ><b> '+proddes+'</b></span></h4>' +
                              '<label for="sel1">No of Items you want to Order:</label>' +
                              '<input type="number" class="form-control search" id="pdprice1" name="edprice" min="0" max="'+prodquan+'" step="1" value="0">'+
                            '</div>' +
                        '</div>'+
                         '<div class="modal-footer">' +
                            '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>' +
                        '</div>'

       $('#modalBody').html(html);
       $('#addModal').modal('show');

    });



  });











</script>