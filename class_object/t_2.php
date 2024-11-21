<!-- Write a PHP class called 'Vehicle' with properties like 'brand', 'model', and 'year'. Implement a method to display the vehicle details. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vehicle</title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
</style>
<body>
<form method="POST">
	<h3>Display Vehicle Details</h3>
	Brand &nbsp;&nbsp;<input type="text" name="brand"><br><br>
	Model &nbsp;&nbsp;<input type="text" name="model"><br><br>
	Year(s) &nbsp;&nbsp;<select name="year">
		<option>--Select--</option>
		<option>1 Year</option>
		<option>2 Years</option>
		<option>3 Years</option>
		<option>4 Years</option>
		<option>>5 Years</option>
	</select><br><br>
	<input type="submit" name="submit" value="Submit">
</form>
<?php

if (isset($_POST['submit'])) {
	
	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$year = $_POST['year'];

	class Vehicle{

		function display_details($brand,$model,$year){
			echo "<h3>Brand of Vehicle: ".$brand."</h3>";
			echo "<h3>Model of Vehicle: ".$model."</h3>";
			echo "<h3>Year of Vehicle: ".$year."</h3>";
		}
	}

	$obj = new Vehicle();
	$obj->display_details($brand,$model,$year);
}

?>
</body>
</html>