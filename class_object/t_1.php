<!-- Write a PHP class 'Rectangle' with length and width properties. Implement methods to calculate the rectangle's area and perimeter. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rectangle</title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
</style>
<body>
<form method="POST">
	<h3>Calculate Rectangle's Area & Perimeter</h3>
	Width &nbsp;&nbsp;<input type="number" name="width"><br><br>
	Length &nbsp;&nbsp;<input type="number" name="length"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
<?php

if (isset($_POST['submit'])) {
	
	$width = $_POST['width'];
	$length = $_POST['length'];

	class Rectangle{

		function calc_area($width,$length){

			$res = $width*$length;
			echo "<h4>Area of Rectangle is: ".$res."</h4>";

		}

		function calc_perimeter($width,$length){

			$res = 2*($width+$length);
			echo "<h4>Perimeter of Rectangle is: ".$res."</h4>";

		}
	}

	$obj = new Rectangle();
	$obj->calc_area($width,$length);
	$obj->calc_perimeter($width,$length);
}
?>
</html>