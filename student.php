<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Student</title>
</head>
<body>
<?php 
class Student
{
	public $name;
	public $major;
	public $gpa;
	
	public function __construct($name, $major, $gpa) {
		$this->name = $name;
		$this->major = $major;
		$this->gpa = $gpa;
	}
	public function hasHonors() {
		if($this->gpa >= 3.5) {
			return "true<br>";
		} else {
			return "false<br>";
		}
	}
}

$student1 = new Student("Jim", "Business", 2.8);
$student2 = new Student("Pam", "Art", 3.6);
echo $student1->hasHonors(); // false
?>
</body>
</html>