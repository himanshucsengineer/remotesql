<!DOCTYPE html>
<html>
    <head>
        <title>Remote sql</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo  $url['css']  ?>/style_user.css">   
    </head>
    <body>
        <?php include('common/header.php');?>
        <div class="log">
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <label for="uname">Email:</label>
                            <input id="uname" type="email" name="uname" placeholder=" Email">
                            <label for="pass">Password:</label>
                            <input id="pass" type="password" name="pass" placeholder="Password">
                            <div class="text-center">
                                <button>login</button>
                            </div>   
                            <a href="register.php">New Here? Register</a> 
                            <a href="#">Forget Password</a>
                        </div> 
                    </div>
                  
            </div>
            </div>
        </div> 
        <?php include('common/footer.php');?>   
        </body>
</html>