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
		if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
			$this->rating = $rating;
		} else {
			$this->rating = "NR";
		}
	}
}

$avengers = new Movie("Avengers", "PG-13");
// G, PG, PG-13, R, NR
$avengers->setRating("Dog");
echo $avengers->getRating(); // NR
?>
</body>
</html>