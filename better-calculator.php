<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Calculator in PHP</title>
</head>
<body>
    <form action="better-calculator.php" method="post">
        First Num: <input type="number" step="0.01" name="num1"/><br>
        Operator: <input type="text" name="op"/><br>
        Second Num: <input type="number" step="0.01" name="num2"/><br>
        <input type="submit" value="Submit"/>
    </form>
    
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];
        
        if($op == '+') {
         echo $num1 + $num2;   
        }elseif($op == '-') {
         echo $num1 - $num2;   
        }elseif($op == '*') {
         echo $num1 * $num2;   
        }elseif($op == '/') {
         echo $num1 / $num2;   
        } else {
            echo 'invalid operator';
        }
        
        
        
    ?>
    
</body>
</html>