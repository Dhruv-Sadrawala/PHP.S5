<!DOCTYPE html>
<html>
<head>
	<title>Cookie_Second_Page</title>
</head>
<body>
	<form method="POST">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>

<?php

if (isset($_POST['submit'])) {
	$cookie_name="u_cookie";
	$u_cookie=$_POST["username"];

	setcookie($cookie_name,$u_cookie,time()+3600,"/");

	if (!isset($_COOKIE[$cookie_name])) {
		echo "Cookie not set.";
	}
	else{
		echo "Cookie Name: " . $cookie_name . "<br>";
    	echo "Cookie Value: " . $_COOKIE[$cookie_name];
	}
}
?>
</html>