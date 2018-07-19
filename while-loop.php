<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>While Loop in PHP</title>
</head>
<body>

  <?php
    $index = 1;
    while($index <= 5) {
      echo "$index <br>";
      $index++;
    }
  ?>
  <hr>
  <?php
    //DO ...WHILE
    // The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.
    $index2 = 2;
    do{
      echo "$index2 <br>";
      $index2++;
    }while($index2 <= 5);
  ?>

</body>
</html>