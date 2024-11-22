<!-- Write a PHP script to sort the following associative array : array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40")
a) ascending order sort by value 
b) ascending order sort by Key 
c) descending order sorting by Value 
d) descending order sorting by Key  -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Associative Multiple Sorting</title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
</style>
<body>
</body>
<?php

$array_a = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

print_r($array_a);

echo "<h3>Array Ascending Sort By Value: </h3>";

asort($array_a);

foreach ($array_a as $key=>$value) {
	echo "<h3>".$value."</h3>";
}


echo "<h3>Array Ascending Sort By Key: </h3>";

ksort($array_a);

foreach ($array_a as $key=>$value) {
	echo "<h3>".$key."</h3>";
}

echo "<h3>Array Descending Sort By Value: </h3>";

arsort($array_a);

foreach ($array_a as $key=>$value) {
	echo "<h3>".$value."</h3>";
}

echo "<h3>Array Descending Sort By Key: </h3>";

krsort($array_a);

foreach ($array_a as $key=>$key) {
	echo "<h3>".$key."</h3>";
}
?>
</html>