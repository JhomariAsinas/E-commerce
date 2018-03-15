<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home">E-Commerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="home">Product</a></li>
      <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Discounts<span class="caret"></span></a>
        <ul class="dropdown-menu">
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
<br>
<br>
<form class="form-inline" action="/action_page.php">
    <div class="form-group">
      <label for="disname">Discount Name:</label>
      <input type="text" class="form-control" id="disname" placeholder="Enter email" name="disname">
    </div>
    <div class="form-group">
      <label for="pwd">Discount Amount:</label>
      <input type="number" class="form-control" id="disamount" placeholder="Enter password" name="disamount">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>