<!-- Connection to the Database -->
<?php 
  require 'includes/database-handler.php';
?>

<!-- Navigation Bar-->
<?php
  require 'header.php';
?> 

<?php 
  $sql = 'SELECT * FROM users;'; //SQL SELECT STATEMENT
  $result = mysqli_query($conn, $sql); //Use the $sql, aka the SQL SELECT STATEMENT, in $conn, the database.

  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row['user_first'];
      echo '<br>';
    }
  }
?>
</body>
</html>

