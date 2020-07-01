<?php
  if(!isset($_SESSION["name"]))
  {
    redirect(base_url()); 
  }
?>
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
        <link rel="stylesheet" href="assets/css/style_user.css">
        <link rel="stylesheet" href="assets/css/style_user_dashboard.css">
        
    </head>
    <body>

       <?php include("common/header.php"); ?>
        <div class="about-head">
            <div class="container">
                <h1>Dash <span style="color: #f8981d;">Board</span></h1>
            </div>    
        </div>     

        <div class="ad">
        <div class="container table-responsive">
            <h3>Account Details</h3>    
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Account Number</th>
                  <th>Available Databases</th>
                  <th>	Available Space</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                </tr>
               
              </tbody>
            </table>
          </div>
          </div>


          
          <div class="db">
            <div class="container table-responsive">
                <h3>Database</h3>    
                <table class="table table-bordered ">
                  <thead>
                    <tr>
                      <th>Database Host</th>
                      <th>Database Name</th>
                      <th>Database Username</th>
                      <th> Database password</th>
                      <th>	Size</th>
                      <th>	Status</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                      <td>1234</td>
                      <td>5mb</td>
                      <td>live</td>
                      <td><input type="checkbox"></td>
                    </tr>
                    
                  </tbody>
                  
                </table>
                <button>Add Database</button>
                <button>Delete Database</button>
              </div>
              </div>

            <div class="phpmy">
                <div class="container">
                    <h3>phpMyAdmin for database administration</h3> 
                    <button><i class="fa fa-unlock-alt" aria-hidden="true"></i> goto my phpMyAdmin</button>
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