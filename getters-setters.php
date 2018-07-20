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
  class Movie {
    public $title; //public: the attribute is open for everybody!
    private $rating; //private: any code outside the class can not to access the attribute!

    function __construct($title, $rating){
      $this->title = $title;
      $this->setRating($rating);
    }

    function getRating(){
      return $this->rating;
    }

    function setRating($rating){
      if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R") {
        $this->rating = $rating;
      } else {
        $this->rating = "NR";
      }
    }


  }

  $avengers = new Movie("Avengers", "");

  $avengers->setRating("R");
  echo $avengers->getRating();
?>
</body>
</html>