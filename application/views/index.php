<!DOCTYPE html>
<html>
    <head>
        <title >Enicoder || Home</title>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $url['css']; ?>style_user.css">
    </head>
    <body>
  <?php include("common/header.php"); ?>
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
          <input type="email" id="#" name="email" placeholder="Email">
          <input type="password" id="#" name="pass" placeholder="Password">
          <button class="button1">Login</button>
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
        
  <div class="modal fade login" id="signupmodal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class=" col-12 modal-title">Sign Up
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
          <input type="email" id="#" name="email" placeholder="Email">
          <input type="password" id="#" name="pass" placeholder="Password">
          <input type="password" id="#" name="pass" placeholder="Re-type Password">
          <button class="button1">Sign Up</button>
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

      

        <div class="top-main">
            <div class="container ">
                <h1>Explore the Power of</br> <span style="color: #f8981d;">Development</span> From Anywhere</h1>
                <center><img class="image-responsive" src="<?php echo $url['image'];?>/mysqlmid.svg"></center>
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <div class="card">
                            <button class="button1">Let's Start</button>    
                        </div>
                           
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <button class="button2">Let's Start</button>    
                        </div>
                    </div>    
                </div>    
            </div>
        </div>    


        



        <div class="how container-fluid">
            
            <div class="row">   
                    <div class="col-md-6 how_left ">
                        <div class="container">
                        <h3>How does it work ?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat. </p>
                            
                        <button>Learn More..</button>    
                        </div>
                    </div> 
                    <div class="col-md-6 how_right" >
                        <div class="container">
                            <center><img src="assets/img/user/phpmyadmin.svg"></center>
                        </div>
                    </div>  
             </div>
            
        </div>  
    <?php include("common/footer.php"); ?>
      <div class="last">
          <div class="container text-center">
            <a href="http://www.eniacoder.com">Eniacoder.com</a>
          </div>  
        </div>  
        
    </body>    
</html>