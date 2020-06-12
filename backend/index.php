<?php
if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['password'];
    $database = $_POST['dname'];
    // echo $username." ".$password." ".$database;

$dbhost='13.233.17.47';
$dbuser='navneet';
$dbpass='@Navneet1';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
die(' not connected'.'mysql_error()');
}else{
    echo "<br>connected to database";
}
$sql = "CREATE USER '$username'@'%' IDENTIFIED BY '$password'";
if ($conn->query($sql) === TRUE) {
    echo "<br>User created";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$sql = "CREATE DATABASE $database";
if ($conn->query($sql) === TRUE) {
    echo "<br>Database created";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$sql = "use $database";
  if ($conn->query($sql) === TRUE) {
      echo "<br>Database used";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
$sql = "GRANT CREATE, SELECT, INSERT,UPDATE,DELETE,ALTER,INDEX,DROP,CREATE TEMPORARY TABLES,SHOW VIEW,CREATE ROUTINE,ALTER ROUTINE,EXECUTE,CREATE VIEW,EVENT,TRIGGER ON $database . * TO '$username'@'%' ";
if ($conn->query($sql) === TRUE) {
    echo "<br>All Privileges are given";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Document</title>
</head>
<body class="container p-5 mt-5">
   
    <form action="" method="post">
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" class="form-control" name="uname" id="" aria-describedby="helpId" placeholder="" required>
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="text" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="" required>
           <small id="helpId" class="form-text text-muted">Password Should be like ' @Example1 '</small>
        </div>
        <div class="form-group">
          <label for="">Database</label>
          <input type="text" class="form-control" name="dname" id="" aria-describedby="helpId" placeholder="" required>
        </div>
        <input name="submit" id="" class="btn btn-primary" type="submit" value="Submit">
    </form>
     <a class="text-center" href="http://13.233.17.47/phpmyadmin/"><h2>Login For PhpMyAdmin</h2></a>
</body>
</html>