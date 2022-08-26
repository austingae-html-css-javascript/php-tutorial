<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vivi and Calla</title>
</head>
<body>
  <form method="GET">
    <input type='text' name='num1' placeholder='Number 1' />
    <input type='text' name='operator' placeholder='Operator' />
    <input type='text' name='num2' placeholder='Number 2' />
    <button type='submit' name='submit' value='submit'>Submit</button>
  </form>
  <?php
    if (isset($_GET['submit'])) { //If the submit button has been clicked, then proceed.
      $number1 = $_GET['num1'];
      $operator = $_GET['operator'];
      $number2 = $_GET['num2'];

      //checking if the user's inputs are valid
      if (is_numeric($number1) == false || is_numeric($number2 == false)) {
        echo "You have inserted something other than a number. Try again.";
      }
      
      if ($operator != '+' && $operator != '-' && $operator != '*' && $operator != '/') {
        echo "This operator is not available.";
      }

      //doing the calculation
      $result;

      if ($operator == '+') {
        $result = $number1 + $number2;
        echo $result;
      }
      elseif ($operator == '-') {
        $result = $number1 - $number2;
        echo $result;
      }
      elseif ($operator == '*') {
        $result = $number1 * $number2;
        echo $result;
      }
      elseif ($operator == '/') {
        $result = $number1 / $number2;
        echo $result;
      }
    }
  ?>
</body>
</html>



