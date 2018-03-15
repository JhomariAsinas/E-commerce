<style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

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
      <a class="navbar-brand" href=" ">E-commerce</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="main/gadgets">Gadgets Items</a></li>
            <li><a href="main/clothings">Clothing Items</a></li>
            <li><a href="main/furniture">Furniture Items</a></li>
            <li><a href="main/food">Food Items</a></li>
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
  <div class="row">
    <div class="col-sm-5" style="margin-left: 0px;">
      <div class="panel panel-primary">
        <div class="panel-heading">GADGETS ITEMS</div>
        <div class="panel-body"><img src="<?php echo base_url();?>/assets/design/technology.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><center><a href="main/gadgets"><h4>SHOP NOW</h4></a></center></div>
      </div>
    </div>
    <div class="col-sm-5" style="margin-left: 110px;"> 
      <div class="panel panel-danger">
        <div class="panel-heading">CLOTHING ITEMS</div>
        <div class="panel-body"><img src="<?php echo base_url();?>/assets/design/dress.png" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-footer"><center><a href="main/clothings"><h4>SHOP NOW</h4></a></center></div>
      </div>
    </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-5" style="margin-left: 0px;">
      <div class="panel panel-success">
        <div class="panel-heading">FOOD ITEMS</div>
        <div class="panel-body"><img src="<?php echo base_url();?>/assets/design/food.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><center><a href="main/food"><h4>SHOP NOW</h4></a></center></div>
      </div>
    </div>
    <div class="col-sm-5" style="margin-left: 100px;"> 
      <div class="panel panel-info">
        <div class="panel-heading">FURNITURE ITEMS</div>
        <div class="panel-body"><img src="<?php echo base_url();?>/assets/design/armchair.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><center><a href="main/furniture"><h4>SHOP NOW</h4></a></center></div>
      </div>
    </div>
  </div>
</div><br><br>