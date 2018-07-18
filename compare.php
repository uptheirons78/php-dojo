<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Statements Again in PHP</title>
</head>
<body>
    <?php
        function getMax($num1, $num2) {
            if($num1 > $num2) {
                return $num1;
            }
            else {
                return $num2;
            }
        }
    ?>
    
    <?php
        function getMaxBis($num1, $num2, $num3) {
            if($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            } elseif ($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            } else {
                return $num3;
            }
        }
    ?>
    
    <p><?php echo getMax(1, 7) ?></p>
    <p><?php echo getMax(71, 7) ?></p>
    <p><?php echo getMaxBis(71, 72, 2) ?></p>
    <p><?php echo getMaxBis(71, 7, 234) ?></p>
    
</body>
</html>