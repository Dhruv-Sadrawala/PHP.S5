<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factorial</title>
</head>
<body>
<form method="POST">
	Enter number to find factorial <input type="number" name="num"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>

<?php

if (isset($_POST['submit'])) {
	
	$num = $_POST['num'];
	$fact=1;

	for ($i=$num; $i >= 1 ; $i--) { 
		
		$fact*=$i;
	}

	echo "Factorial is: $fact";
}
?>
</html>