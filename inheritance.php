<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Getters and Setters in PHP</title>
</head>
<body>
<?php
  class Chef {
    function makeChicken(){
      echo "the chef makes chicken <br>";
    }
    function makeSalad(){
      echo "the chef makes salad <br>";
    }
    function makeSpecialDish(){
      echo "the chef makes bbq ribs <br>";
    }
  }
  class ItalianChef extends Chef {
    function makePasta() {
      echo "make pasta <br>";
    }
    function makeSpecialDish(){
      echo "the chef makes tortellini <br>";
    }
  }

  $chef = new Chef();
  $chef->makeChicken();
  $chef->makeSpecialDish();

  $italianChef = new ItalianChef();
  $italianChef->makeChicken();
  $italianChef->makePasta();
  $italianChef->makeSpecialDish();
?>
</body>
</html>