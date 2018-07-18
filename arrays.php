<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ARRAYS IN PHP</title>
</head>
<body>
  <?php
    //an array can contain any kind of information and data types
    $friends = array("Kevin", "Oscar", "Karen", "Jim");
    //echo $friends; //Array
    echo "<br>";
    echo "$friends[0]<br>"; //Kevin
    echo count($friends);
    echo "<br>";
    $friends[5] = "Mimmo";
    echo count($friends);
  ?>
</body>
</html>