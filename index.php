<?php

require_once __DIR__."/db.php";

class Movie{
  public $title;
  public $type;
  public $year;
  public $language;
  public $review;
  public $vote;

  function __construct($_title , $_type , $_year , $_language , $_review , $_vote)
  {
    $this->title = $_title ;
    $this->type = $_type ;
    $this->year = $_year ;
    $this->language = $_language ;
    $this->review = $_review ;
    $this->vote = $_vote ;
  }
  public function getVote(){
    if ($this->vote = 10){
      return "ottimo";
    }
    else{
      return "niente di che!";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php foreach($movies as $movie):
    $new_movie = new Movie($movie["title"],$movie["type"],$movie["year"],$movie["language"],$movie["review"],$movie["vote"])  
  ?>
  <h1><?php echo $new_movie->title?></h1>
  <h2><?php echo $new_movie->type?></h2>
  <h3><?php echo $new_movie->year?></h3>
  <h4><?php echo $new_movie->language?></h4>
  <h5><?php echo $new_movie->review?></h5>
  <h6><?php echo $new_movie->getVote()?></h6>

  <?php endforeach;?>  
</body>
</html>