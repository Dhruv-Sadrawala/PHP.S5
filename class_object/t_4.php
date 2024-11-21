<!-- Write a class called 'Math' with static methods like 'add()', 'subtract()', 'multiply()', and ‘divide()’. Use these methods to perform mathematical calculations. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Math</title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
</style>
<body>
<form method="POST">
	<h3>Math Functions</h3>
	Number 1 &nbsp;&nbsp; <input type="number" name="num_1"><br><br>
	Number 2 &nbsp;&nbsp; <input type="number" name="num_2"><br><br>
	Select Operation &nbsp;&nbsp; <select name="op">
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
	</select><br><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
<?php

if (isset($_POST['submit'])) {
	
	$num_1 = $_POST['num_1'];
	$num_2 = $_POST['num_2'];
	$op = $_POST['op'];

	class Math_cl{

		function add_func($num_1,$num_2){
			$res = $num_1 + $num_2;
			echo "<h3>Addtion of Two Numbers: ".$res."</h3>";
		}

		function sub_func($num_1,$num_2){
			$res = $num_1 - $num_2;
			echo "<h3>Subtration of Two Numbers: ".$res."</h3>";
		}

		function mul_func($num_1,$num_2){
			$res = $num_1 * $num_2;
			echo "<h3>Product of Two Numbers: ".$res."</h3>";
		}

		function div_func($num_1,$num_2){
			$res = $num_1 / $num_2;
			echo "<h3>Remainder of Two Numbers: ".$res."</h3>";
		}
	}

	$obj = new Math_cl();

	if ($op == 'Add') {
		$obj->add_func($num_1,$num_2);
	}
	elseif ($op == 'Subtract'){
		$obj->sub_func($num_1,$num_2);
	}
	elseif ($op == 'Multiply'){
		$obj->mul_func($num_1,$num_2);
	}
	elseif ($op == 'Divide'){
		$obj->div_func($num_1,$num_2);
	}
}
?>
</html>