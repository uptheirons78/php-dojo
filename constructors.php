<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Constructors in PHP</title>
</head>
<body>

  <?php
    //a Class is essentially a CUSTOM DATA TYPE
    class Book { //this is a Class
      public $title;
      public $author;
      public $pages;

      function __construct($aTitle, $aAuthor, $aPages) {
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
      }
    }

    $book1 = new Book("Harry Potter", "JK Rowling", 402);
    $book2 = new Book("Lord Of The Ring", "JRR Tolkien", 739);

  ?>
  <p>Book Title: <?php echo $book1->title ?> - Book Author: <?php echo $book1->author ?></p>
  <p>Book Title: <?php echo $book2->title ?> - Book Author: <?php echo $book2->author ?></p>

</body>
</html>