<!DOCTYPE html>
<html>
    <head>
        <title >Enicoder || Home</title>
    
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $url['css']; ?>style_user.css">
    </head>
    <body>
  <?php include("common/header.php"); ?>
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