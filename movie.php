<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Movie</title>
</head>
<body>
<?php 
class Movie
{
	public $title;
	private $rating;
	
	public function __construct($title, $rating) {
		$this->title = $title;
		$this->rating = $rating;
	}
	public function getRating() {
		return $this->rating;
	}
	public function setRating($rating) {
		return $this->rating = $rating;
	}
}

$avengers = new Movie("Avengers", "PG-13");
// G, PG, PG-13, R, NR

echo $avengers->setRating("Dog"); // Dog (anything what s in there)
?>
</body>
</html>