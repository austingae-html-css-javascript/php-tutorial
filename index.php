<!-- Connection to the Database -->
<?php 
  require 'includes/database-handler.php';
?>

<!-- Navigation Bar-->
<?php
  require 'header.php';
?> 

<form action ='includes/signup.php' method='POST'>
  <input type='text' name='firstName' placeholder='your first name' />
  <input type='text' name='lastName' placeholder='your last name' />
  <input type='text' name='email' placeholder='your email' />
  <input type='text' name='username' placeholder='your username' />
  <input type='password' name='password' placeholder='your password' />
  <button type='submit' name='submit'>Sign Up</button>
</form>

</body>
</html>

