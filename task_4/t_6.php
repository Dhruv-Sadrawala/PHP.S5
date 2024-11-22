<!-- $color = array(4 => 'white', 6 => 'green', 11=> 'red'); Write a PHP script to get the first element of the above array. Expected result : white -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Associative Array</title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
</style>
<body>
</body>
<?php

$color = array(4 => 'White', 6 => 'Green', 11=> 'Red');

echo "<h3>First Element is: ".reset($color)."</h3>";

?>
</html>