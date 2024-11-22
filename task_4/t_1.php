<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Addition of Two Matrices</title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
</style>
<body>
</body>
<?php

$array_1 = array(array(12,15,16),array(20,25,26),array(30,35,38));
$array_2 = array(array(55,56,51),array(71,72,74),array(66,65,62));


echo "<table border=1 cellspacing=0 cellpadding=10>
	<tr><th colspan=3>Array 1</th></tr>";

for ($i=0; $i < 3 ; $i++) { 
	
	echo "<tr>";

	for ($j=0; $j < 3 ; $j++) { 
		echo "<td align=center>".$array_1[$i][$j]."</td>";	
	}
	echo "</tr>";
}
	echo "</table>";

	echo "&nbsp;&nbsp;&nbsp;&nbsp;";

echo "<table border=1 cellspacing=0 cellpadding=10>
	<tr><th colspan=3>Array 2</th></tr>";

for ($i=0; $i < 3 ; $i++) { 
	
	echo "<tr>";

	for ($j=0; $j < 3 ; $j++) { 
		echo "<td align=center>".$array_2[$i][$j]."</td>";	
	}
	echo "</tr>";
}
	echo "</table>";


	for ($i=0; $i < 3 ; $i++) { 

		for ($j=0; $j < 3 ; $j++) { 
			echo "<h3>Addition of Two Matrices is: ".$array_1[$i][$j]+$array_2[$i][$j]."</h3>";	
	}
}
?>
</html>
