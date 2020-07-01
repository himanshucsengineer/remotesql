<?php
$message="";
    if($this->session->flashdata('error')){
        echo '<script>$(document).ready(function(){$("#alertModel").modal("show");});</script>';
        $message = '<p style="text-align:center;" class="text-danger">'.$this->session->flashdata('error').'</p>';
    }
    if($this->session->flashdata('success')){
      echo '<script>$(document).ready(function(){$("#alertModel").modal("show");});</script>';
      $message = '<p style="text-align:center;" class="text-success">'.$this->session->flashdata('success').'</p>';
  }
?>
<footer class="shadow-lg foot">
<div class="container">
<div class="row">

    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
    <center><img width="133" height="55" src="assets/img/user/headlogo.svg" alt="Eniacoder" class="custom-logo" ></center>
    <form  action="<?php echo base_url();?>indexController/newsfeed" method="POST">
      <input type="email" name="email" placeholder="enter email" required>
      <button name="formSubmit" type="submit">submit</button>
    </form>

</div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
    <h5>products</h5>
    <hr class="style1">
    <div class="links">
        <a href="#">Health insurance</a></br>
        <a href="#">Term insurance</a></br>
        <a href="#">Bike insurance</a></br>
        <a href="#">Car insurance</a></br>
        <a href="#">Travel insurance</a></br>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
    <h5>quick links</h5>
    <hr class="style1">
    <div class="links">
        <a href="#">covid-19 update/assitance</a></br>
        <a href="#">blog</a></br>
        <a href="#">privacy</a></br>
        <a href="#">terms and condition</a></br>
        <a href="#">code of coduct</a></br>
        <a href="#">agent panel</a></br>
        <a href="#">site map</a></br>
    </div>
    </div>
    
</div>
</div>    
</footer>
<div class="modal fade login" id="signupmodal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 id="test" class="col-12 modal-title">Sign Up
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </h4>
         
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h6>with</h6>
          <div class="row justify-content-center">
            <div class="col-md-3">
              <div class="card">
                <button style="background-color: #3b5998;">Facebook</button>
              </div>
            </div>
            <div class="col-md-1">
              <div class="vl"></div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <button style="background-color: #DB4437;">Google</button>
              </div>
            </div>  
          </div> 
          <h6>or</h6> 
          <div class="row justify-content-center">
          <div class="col-md-8">
          <form method="post" name="formSubmit" action="<?php echo base_url();?>indexController/signup">
            <input type="text" id="#" name="name" placeholder="Name" required>
            <input type="email" id="#" name="email" placeholder="Email" required>
            <input type="password" id="#" name="password" placeholder="Password" required>
            <input type="password" id="#" name="cpassword" placeholder="Re-type Password" required>
          <button type="submit" class="button1">Sign Up</button>
          </form>
          </div>
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-4">
                <a href="#" data-toggle="modal" data-target="#loginmodal">Existing User ?</a>
              </div>  
              <div class="col-md-1">
                <div class="vl"></div>
              </div>
              <div class="col-md-4">
                <a href="#" data-toggle="modal" data-target="#loginmodal">Login</a>
              </div>
            </div>  
          </div>  
        </div>
      </div>
    </div>
  </div>

   <!-- The login Modal -->
   <div class="modal fade login" id="loginmodal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class=" col-12 modal-title">Log in
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </h4>
         
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <h6>with</h6>
          <div class="row justify-content-center">
            <div class="col-md-3">
              <div class="card">
                <button style="background-color: #3b5998;">Facebook</button>
              </div>
            </div>
            <div class="col-md-1">
              <div class="vl"></div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <button style="background-color: #DB4437;">Google</button>
              </div>
            </div>  
          </div> 
          <h6>or</h6> 
          <div class="row justify-content-center">
            <div class="col-md-8">
          <form action="<?php echo base_url();?>indexController/login" method="POST">
            <input type="email" id="#" name="email" placeholder="Email">
            <input type="password" id="#" name="password" placeholder="Password">
            <button type="submit" class="button1">Login</button>
          </form>
          </div>
        </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-4">
                <a href="#">Forget Password</a>
              </div>  
              <div class="col-md-1">
                <div class="vl"></div>
              </div>
              <div class="col-md-4">
                <a href="#" data-toggle="modal" data-target="#signupmodal">New User</a>
              </div>
            </div>  
          </div>  
        </div>
        
      </div>
    </div>
  </div>




<div class="modal fade login" id="alertModel">  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class=" col-12 modal-title">Alert
          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </h4>
      </div>
      <?php echo $message;?>
    </div>
  </div>
</div>
