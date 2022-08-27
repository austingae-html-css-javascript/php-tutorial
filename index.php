<!-- Connection to the Database -->
<?php 
  require 'includes/database-handler.php';
?>

<!-- Navigation Bar-->
<?php
  require 'header.php';
?> 

<form method='POST'>
  <input type='text' name='firstName' placeholder='your first name' />
  <input type='text' name='lastName' placeholder='your last name' />
  <input type='text' name='email' placeholder='your email' />
  <input type='text' name='username' placeholder='your username' />
  <input type='password' name='password' placeholder='your password' />
  <button type='submit' name='submit'>Sign Up</button>
</form>

<?php 
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sqlStatement = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$firstName', '$lastName', '$email', '$username', '$password');";
  $result = mysqli_query($conn, $sqlStatement);
?>
</body>
</html>

