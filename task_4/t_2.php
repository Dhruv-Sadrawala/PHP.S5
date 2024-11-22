<!-- Create a PHP program which will create buttons for the following functions 
• sort 
• search 
• sum 
• merge 
and print the data accordingly. -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buttons Option</title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
</style>
<body>
<form method="POST">
	<h3>Select Appropriate Button</h3><br>
	<input type="submit" name="sort_arr" value="Sort">&nbsp;&nbsp;
	<input type="submit" name="serach_arr" value="Search">&nbsp;&nbsp;
	Enter Value &nbsp;
	<input type="number" name="serach_inp" placeholder="enter number to search and get position"><br><br>
	<input type="submit" name="sum_arr" value="Sum">&nbsp;&nbsp;
	<input type="submit" name="merge_arr" value="Merge">&nbsp;&nbsp;
</form>
</body>
<?php

$array_1 = array(10,90,50,24,75);
$array_2 = array(45,86,99,82,43);

if (isset($_POST['sort_arr'])) {

	sort($array_1);
	
	echo "<h3>Array 1 After Sorting:";

	foreach ($array_1 as $value) {
		echo "<h3>".$value."</h3>";
	}


	sort($array_2);
	
	echo "<h3>Array 2 After Sorting:";

	foreach ($array_2 as $value) {
		echo "<h3>".$value."</h3>";
	}

}

if (isset($_POST['serach_arr']) && !empty($_POST['serach_inp'])) {
	
	$se_var = $_POST['serach_inp'];
	$count = 0;

	if(in_array($se_var, $array_1)){

		foreach ($array_1 as $value) {

			$count++;

			if ($se_var == $value) {
		
				echo "<h3>Element Found In Array 1 at Position: ".$count."</h3>";
			}
		}

	}

	elseif (in_array($se_var, $array_2)){

		foreach ($array_2 as $value) {

			$count++;

			if ($se_var == $value) {
		
				echo "<h3>Element Found In Array 2 at Position: ".$count."</h3>";
			}
		}

	}
	else{

		echo "<h3>Element Absent In Both Arrays</h3>";
	}

		
}

if (isset($_POST['sum_arr'])) {
	
	for ($i = 0 ; $i < count($array_1); $i++) { 
		
		$sum = $array_1[$i]+$array_2[$i];
	}

	echo "<h3>Addition of Two Arrays:".$sum."</h3>";
}

if (isset($_POST['merge_arr'])) {

	$array_1 = array(10,90,50,24,75);
	$array_2 = array(45,86,99,82,43);
	
	$array_merged = array_merge($array_1,$array_2);

	echo "<h3>Array After Merging:</h3>";

	for ($i = 0 ; $i < count($array_merged); $i++) { 
		
		echo "<h3>".$array_merged[$i]."</h3>";
	}

}
?>
</html>