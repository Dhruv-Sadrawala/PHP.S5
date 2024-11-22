<!-- Write a PHP program to get the index of the highest value in an associative array. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Max Element</title>
</head>
<body>
</body>
<?php
$array = array("Sophia" => 31, "Jacob" => 41, "William" => 39, "Ramesh" => 40);

$maxIndex = array_keys($array, max($array))[0];

echo "The index of the highest value is: " . $maxIndex;
?>

</html>