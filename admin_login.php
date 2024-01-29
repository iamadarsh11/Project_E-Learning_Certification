
<?php
include 'config.php';
session_start();

error_reporting(0);
if (isset($_POST["login"])) {
    $email = mysqli_real_escape_string($conn, $_POST["adminname"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
  
    $check_email = mysqli_query($conn, "SELECT id FROM admin_data WHERE user_id='$email' AND password='$password'");
  
  
    if (mysqli_num_rows($check_email) > 0) {
      $row = mysqli_fetch_assoc($check_email);
      header("Location: admin/admin_main.php");
    } else {
      echo "<script>alert('Login details is incorrect. Please try again.');</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="adminlogin.css">
    <style>
</style>
    <title>Admin Login Page</title>
</head>
 
<body>
    <form action="" method="post">
        <div class="login-box">
            <h1>Admin Login</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Admin ID" name="adminname" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password" value="">
            </div>
 
            <input class="button" type="submit" name="login" value="Sign In">
        </div>
    </form>
</body>
 
</html>