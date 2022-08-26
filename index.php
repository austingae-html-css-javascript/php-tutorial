<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vivi and Calla</title>

  <link rel='stylesheet' type='text/css' href='styles.css' />
</head>
<body>
  <?php
  $dayOfWeek = date('w');
  
  switch($dayOfWeek) {
    case 1: 
      echo 'It&apos;s Monday';
      break;
    case 2: 
        echo 'It&apos;s Tuesday';
        break;
    case 3: 
        echo 'It&apos;s Wednesday';
        break;
    case 4: 
        echo 'It&apos;s Thursday';
        break;
    case 5: 
        echo '<p class=day>It&apos;s Friday</p>';
        break;
    case 6: 
        echo 'It&apos;s Saturday';
        break;
    case 0: 
        echo 'It&apos;s Sunday';
        break;
  }
  ?>
</body>
</html>



