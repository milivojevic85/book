<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Chef</title>
</head>
<body>
<?php 
class Chef
{
	public function makeChicken() {
		echo "The chef makes chicken<br>";
	}
	public function makeSalad() {
		echo "The chef makes salad<br>";
	}
	public function makeSpecialDish() {
		echo "The chef makes bbq ribs<br>";
	}
}

class ItalianChef extends Chef
{
	public function makePasta() {
		echo "The chef makes pasta<br>";
	}
}

$chef = new Chef();
$chef->makeSpecialDish(); // The chef makes bbq ribs

$italianChef = new ItalianChef();
$italianChef->makeSpecialDish(); // The chef makes bbq ribs
?>
</body>
</html>