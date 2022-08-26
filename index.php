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
    <input type='text' name='personName' />
    <button type='submit'>Submit</button>
  </form>
  <?php
    $name = $_GET['personName'];
    echo 'Your name is ' . $name;
    echo "<br/>";
    echo strlen($name);
    echo "<br/>";
    echo strrev($name);

    echo strpos($name, 'i', 3);

    $users = array(5 => "Austin", 2 => "Ryan", 3 => "Walter");
    echo var_dump($users);
    echo $users['5'];

    $x = 20;
    $y = 20;
    if ($x != $y) {
      echo "TRUE";
    }

    $x = 5;
    switch($x) {
      case 1:
        echo "the answer is 1";
        break;
      case 2:
        echo "the answer is 2";
        break;
      default:
        echo "this is default";
        break;
    }





  ?>
</body>
</html>



