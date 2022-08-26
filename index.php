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
    <input type='text' name='firstNum' placeholder='Your First Number'/>
    <input type='text' name='secondNum' placeholder='Your Second Number' />
    <select name='operator'>
      <option value='+'>Add</option>
      <option value='-'>Minus</option>
      <option value='*'>Multiply</option>
      <option value='/'>Divide</option>
    </select>

    <button type='submit' name='submit' value='submit'>=</button>
  </form>
  <?php
    $firstNumber = $_GET['firstNum'];
    $secondNumber = $_GET['secondNum'];
    $operator = $_GET['operator'];
    $submit = $_GET['submit'];
    echo $firstNumber;
    echo $operator;
    echo $secondNumber;

    if (isset($_GET['submit'])) { //isset() checks whether a variable is declared and is not NULL: https://www.w3schools.com/pHP/func_var_isset.asp#:~:text=The%20isset()%20function%20checks,NULL%2C%20otherwise%20it%20returns%20false.
      switch ($operator) {
        case '+':
          $result = $firstNumber + $secondNumber;
          echo '=' . $result;
          break;
        case '-':
          $result = $firstNumber - $secondNumber;
          echo '=' . $result;
          break;
        case '*':
          $result = $firstNumber * $secondNumber;
          echo '=' . $result;
          break;
        case '/':
          $result = $firstNumber / $secondNumber;
          echo '=' . $result;
          break;
        default:
          echo "No Answer";
          break;
      }
    }

  ?>
</body>
</html>



