<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Working with Strings in PHP</title>
</head>
<body>
  <?php

    $phrase = "Giraffe Academy";
    echo strtolower($phrase); //string method all lowercased
    echo "<hr>";
    echo strtoupper($phrase);//uppercased everything
    echo "<hr>";
    echo strlen($phrase);//length of a string
    echo "<hr>";
    echo $phrase[0]; //pring out first letter of a string
    echo "<hr>";
    echo str_replace("Giraffe", "Panda", $phrase); //replace method
    echo "<hr>";
    echo substr($phrase, 0, 5); //method for creating substrings

  ?>
</body>
</html>