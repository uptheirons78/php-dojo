<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Switch Statement in PHP</title>
</head>
<body>
  <form action="switch.php" method="post">
    What was your grade ?
    <input type="text" name="grade">
    <input type="submit">
  </form>

  <?php
    if(isset($_POST["grade"])) {//this, to avoid php "undefined" message before setting $grade value

      $grade = $_POST["grade"];

      switch ($grade) {
        case 'A':
          echo "You did amazing!";
          break;
        case 'B':
          echo "You did pretty good!";
          break;
        case 'C':
          echo "You did not so good!";
          break;
        case 'D':
          echo "You did bad!";
          break;
        case 'F':
          echo "You FAIL!";
          break;
        default:
          echo "Tell us your REAL grade!";
          break;
      }
    }

  ?>
</body>
</html>