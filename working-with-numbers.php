<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Working with Numbers in PHP</title>
</head>
<body>
  <?php

    echo 5 + 9;
    echo "<br>";
    echo "5 + 9";
    echo "<br>";
    echo 10 % 3; //reminder
    echo "<br>";
    echo 4 + 5 * 10; //54
    echo "<br>";
    echo (4 + 5) * 10; //90
    echo "<br>";
    $num = 10;
    $num++; //11
    echo $num; //11
    echo "<br>";
    $anotherNum = 15;
    echo $anotherNum += 35; //50

    //absolute value
    echo "<br>";
    echo abs(-100); //100

    //power
    echo "<br>";
    echo pow(2, 4); //16

    //square
    echo "<br>";
    echo sqrt(144); //12

    //max
    echo "<br>";
    echo max(2, 10); //10

    //min
    echo "<br>";
    echo min(2, 10); //2

    //round
    echo "<br>";
    echo round(3.2); //3

    //ceil (round up)
    echo "<br>";
    echo ceil(3.2); //4

    //floor (round down)
    echo "<br>";
    echo floor(3.7); //3

  ?>
</body>
</html>