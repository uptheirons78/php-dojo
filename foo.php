<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FUNCTIONS IN PHP</title>
</head>
<body>
  <?php
    function sayHi($name) {
      echo "Hello $name";
    }
  ?>

  <p><?php sayHi('Jim') ?></p>
  <p><?php sayHi('Jon') ?></p>
  <p><?php sayHi('Jane') ?></p>

  <?php
    function cube($num) {
      return pow($num, 3);
    }

    $cubeResult = cube(4); //64
  ?>

  <p><?php echo $cubeResult ?></p>
</body>
</html>