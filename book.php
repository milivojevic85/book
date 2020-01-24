<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Book</title>
</head>
<body>
<?php 
class Book
{
	public $title;
	public $author;
	public $pages;
	
	public function __construct($title, $author, $pages) {
		$this->title = $title;
		$this->author = $author;
		$this->pages = $pages;
	}
	
	public function getTitle() {
		return $this->title."<br>";
	}
}

$book1 = new Book("Harry Potter", "JK Rowling", 400);
$book2 = new Book("Lord Of the Rings", "Tolkien", 700);
echo $book1->getTitle(); // Harry Potter
echo $book2->getTitle(); // Lord Of the Rings
?>
</body>
</html>