<?php

	function __autoload($class) {
		require_once $class . '.php';
	}

	$car = new ParentClass("Car1", 4, 15, 5);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<?php
		$car->start();
		$car->drive(7);
		$car->drive(10);
		$car->fillUp();
		$car->drive(100);
		#$car->drive(800);
		$car->end();

		$motorcycle = new ChildClass("1",30, 15);
		$motorcycle->start();
		$motorcycle->drive(100);
		$motorcycle->fillup();
		$motorcycle->drive(35);
		$motorcycle->coast();
		$motorcycle->drive(150);
		$motorcycle->drive(300);
		$motorcycle->end();

		$saved = $motorcycle->save();
		$newCycle = ChildClass::restore($saved);

		$newCycle->start();
		$newCycle->coast();
		$newCycle->drive(10);
		$newCycle->fillUp();
		$newCycle->drive(50);
		$newCycle->end();
	?>
</body>
</html>
