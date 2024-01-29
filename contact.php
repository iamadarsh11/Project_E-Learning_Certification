<?php
include 'config.php';
session_start();


  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $message = mysqli_real_escape_string($conn, $_POST["message"]);
  

    $sql2 = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    $result2 = mysqli_query($conn, $sql2);
    

?>