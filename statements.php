<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Conditional Statements in PHP</title>
</head>
<body>
  <?php
    $isMale = false;
    $isTall = true;

    if ($isMale && $isTall){
      echo "You are a tall male";
    } elseif ($isMale && !$isTall) {
      echo "You are short male";
    } elseif (!$isMale && $isTall) {
      echo "You are tall, but not male";
    } else {
      echo "You are not a tall male";
    }
  ?>
</body>
</html>