<!-- Create a PHP script to manage a library of books using associative arrays. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Library Management</title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
</style>
<body>
</body>
<?php

$lib_array = array(1=>array("Harry Potter","ABC",2008),2=>array("Rich Dad Poor Dad","XYZ",2015),3=>array("Steve Jobs","HGI",2002));

echo "<table border=1 cellspacing=0 cellpadding=10 align=center>
	<tr><th colspan=4 align=center>Library Management</th></tr>
	<tr>
	<th align=center>ID</th><th align=center>Book Name</th><th align=center>Author</th><th>Year of Publish</th>
	<tr>";

foreach ($lib_array as $key => $value) {
	
	echo "<tr>";

	echo "<td align=center>$key</td>";

	foreach ($value as $k => $v) {
			
		echo "<td align=center>$v</td>";
	}

	echo"</tr>";
}

echo "</table>";
?>
</html>