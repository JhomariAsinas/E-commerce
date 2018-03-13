<br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <div class="col-sm-3"></div>
    <div class="login-center">
      <div class="container">
        <center><h2>Welcome Admin</h2></center>
        <form id="login">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="username" class="form-control" id="email" placeholder="Enter Username" name="logemail">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="logpwd">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
           <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Sign Up</button>
        </form>
      </div>
  </div>
<div class="col-sm-3"></div>

<script type="text/javascript">
  $(document).ready(function(){

    $(document).on('submit','#login',function(e){
      e.preventDefault();

        $.ajax({
          url:'<?php echo base_url();?>admin/login',
          type:'post',
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(data) {
            if(data){
              window.location.href = 'admin/home';
            }else{
              swal("Wrong!", "Incorrect Credentials", "error");
            }
          }
        });
    });
  });



</script>