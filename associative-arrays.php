<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ASSOCIATIVE ARRAYS IN PHP</title>
</head>
<body>
  <form action="associative-arrays.php" method="post">
    <input type="text" name="student">
    <input type="submit">
  </form>
  <?php
    //associative arrays store key-value pairs
    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
    //echo $grades["Jim"]; //A+
    if( isset($_POST['student']) ){
      echo $grades[$_POST["student"]];
    }
  ?>
</body>
</html>