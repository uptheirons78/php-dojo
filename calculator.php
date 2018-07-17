<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Calculator in PHP</title>
</head>
<body>
    <form action="calculator.php" method="get">
        <input type="number" name="num1"/>
        <br>
        <input type="number" name="num2"/>
        <input type="submit" value="Submit"/>
    </form>
    
    Answer is : <?php echo $_GET["num1"] + $_GET["num2"] ?>
    <br>
    Answer is : <?php echo $_GET["num1"] * $_GET["num2"] ?> 
</body>
</html>