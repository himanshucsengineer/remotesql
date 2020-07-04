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
            <h3>User Details</h3>    
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Username</th>
                  <th>Password</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $count=1;
                foreach ($url[1]["all_data"] as $perreq) 
                {
                    echo"  
                        <tr>
                            <td>".$count."</td>
                            <td>".$perreq->sqlusername."</td>
                            <td>".$perreq->sqlpassword."</td>
                        </tr>";
                        $count++;
                }
                ?>
              </tbody>
            </table>
            <button data-toggle="modal" data-target="#newuserModel" >Add New User</button>
          </div>
          </div>
          <br>

          

          
          <div class="db">
            <div class="container table-responsive">
                <h3>Database</h3>    
                <table class="table table-bordered ">
                  <thead>
                    <tr>
                      <th>S.No.</th>
                      <th>Database Name</th>
                      <th>Users</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                     $count=1;
                    foreach ($url[2]["all_data"] as $perreq) 
                    {
                        echo"  
                            <tr>
                                <td>".$count."</td>
                                <td>".$perreq->sqldbname."</td>
                                <td>".$perreq->sqluserids."</td>
                            </tr>";
                            $count++;
                    }
                    ?>
                   </tbody>
                  
                </table>
                <?php
                if($_SESSION['dbcount']<5)
                {
                  echo '<button data-toggle="modal" data-target="#newdbModel" >Add Database</button>';
                }
                else{
                  echo "<p class='text-danger'>You have Created Max Allowed DataBase For Create New Database update your plan</p>";
                }
                ?>
              </div>
              </div>
<br><br>
            <div class="phpmy">
                <div class="container">
                    <h3>Add user to database</h3> <br>
                    <form action="<?php echo base_url();?>DashboardController/addusertodb" method="POST">
                      <select  id="database" name="database" required>
                        <?php
                          foreach ($url[2]["all_data"] as $perreq) 
                          {
                            echo "<option value=".$perreq->sqldbname.">$perreq->sqldbname</option>";
                          }
                        ?>
                      </select>
                      

                      <select id="user" name="user" required>
                        <?php
                            foreach ($url[1]["all_data"] as $perreq) 
                            {
                              echo "<option value=".$perreq->sqlusername.">$perreq->sqlusername</option>";
                            }
                        ?>
                      </select> 
                      <button type="submit">Add</button>
                      </form>
                </div>
            </div>
            <br><br>
            <br><br>
                <div class="phpmy">
                <div class="container">
                    <h3>Php My admin for database administration</h3> <br>
                    <a href="http://localhost/phpmyadmin" ><button><i class="fa fa-unlock-alt" aria-hidden="true"></i> goto my phpMyAdmin</button></a>
                </div>
            </div>
            <?php include("common/footer.php"); ?>





<div class="modal fade login" id="newdbModel">
  <div class="modal-dialog">
      <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class=" col-12 modal-title">Add New Database
          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </h4>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form action="<?php echo base_url();?>DashboardController/newdatabase" method="POST">
              <input type="text" id="#" name="dbname" placeholder="DataBase Name" required>
              <button type="submit" class="button1">Add</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade login" id="newuserModel">
  <div class="modal-dialog">
      <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class=" col-12 modal-title">Add New User
          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </h4>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form action="<?php echo base_url();?>DashboardController/newuser" method="POST">
              <input type="text" id="#" name="username" placeholder="User Name" required>
              <input type="text" id="#" name="password" placeholder="Password" required>
              <input type="text" id="#" name="cpassword" placeholder="Confirm Password" required>
              <button type="submit" class="button1">Add</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


        <div class="last">
          <div class="container text-center">
            <a href="http://www.eniacoder.com">Eniacoder.com</a>
          </div>  
        </div>  
        
    </body>    
</html>