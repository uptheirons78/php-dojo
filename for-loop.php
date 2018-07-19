<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>For Loop in PHP</title>
</head>
<body>
  <?php
    for ($i=1; $i <= 5; $i++) {
      echo "$i <br>";
    }
  ?>
  <hr>
  <?php
    $friends = array("mimmo", "mammo", "mummu", "memmo", "mamma");
    for ($i=0; $i < count($friends); $i++) {
      echo "$friends[$i] <br>";
    }
  ?>
</body>
</html>