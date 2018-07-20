<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Object Functions in PHP</title>
</head>
<body>

  <?php

    class Student {
      public $name;
      public $major;
      public $gpa;

      function __construct($name, $major, $gpa){
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
      }

      function hasHonors(){
        if($this->gpa > 3.5){
          return "true";
        }
        return "false";
      }
    }

    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);

    echo $student1->hasHonors();
    echo "<hr>";
    echo $student2->hasHonors();
  ?>

</body>
</html>