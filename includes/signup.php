<?php 
  require 'database-handler.php';

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $uid = $_POST['username'];
  $password = $_POST['password'];
  
  $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$firstName', '$lastName', '$email', '$uid', '$password');"; //SQL INSERT INTO STATEMENT
  $result = mysqli_query($conn, $sql); //Use the $sql, aka the SQL SELECT STATEMENT, in $conn, the database.
  
  header ("Location: ../index.php");
?>