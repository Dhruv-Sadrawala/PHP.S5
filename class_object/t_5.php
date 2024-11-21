<!-- Write a class called 'Employee' and add properties like ‘Name’, 'salary', and 'designation'. Implement methods to calculate net salary based on HRA and DA. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee</title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
</style>
<body>
<form method="POST">
	<h3>Employee HRA and DA Calculations</h3>
	Name &nbsp;&nbsp;<input type="text" name="e_name"><br><br>
	Salary &nbsp;&nbsp;<input type="number" name="e_salary"><br><br>
	Designation &nbsp;&nbsp; <select name="deg">
		<option>--Select Designation--</option>
		<option>HOD</option>
		<option>Manager</option>
		<option>Employee</option>
		<option>Peon</option>
	</select><br><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
<?php

if (isset($_POST['submit'])) {
	
	$name = $_POST['e_name'];
	$salary = $_POST['e_salary'];
	$deg = $_POST['deg'];

	class Employee{

		function calc_hra_da($salary){
			$hra = (5*($salary))/100;
			$da = (2.5*($salary))/100;
			$n_salary = ($salary + $da) - $hra;
			echo "<h3>Salary After Removing HRA & Adding DA: ".$n_salary."</h3>";
		}
	}

	$obj = new Employee();
	$obj->calc_hra_da($salary);
}
?>
</html>
