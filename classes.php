<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Classes and Obj in PHP</title>
</head>
<body>

  <?php
    //a Class is essentially a CUSTOM DATA TYPE
    class Book { //this is a Class
      public $title;
      public $author;
      public $pages;
    }

    $book1 = new Book(); //this is the object - it is an instance of a Class
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    $book2 = new Book(); //this is the object - it is an instance of a Class
    $book2->title = "Lord Of The Rings";
    $book2->author = "JRR Tolkien";
    $book2->pages = 700;

  ?>
  <p>Book Title: <?php echo $book1->title ?> - Book Author: <?php echo $book1->author ?></p>
  <p>Book Title: <?php echo $book2->title ?> - Book Author: <?php echo $book2->author ?></p>



</body>
</html>