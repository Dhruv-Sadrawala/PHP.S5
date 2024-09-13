<!DOCTYPE html>
<html>
<head>
	<title>Cookie 2</title>
</head>
<body>
	<form method="POST">
		Username:<input type="text" name="u_name"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>

<?php

if (isset($_POST['submit'])) {
	$cookie_name="username";
	$u_cookie=$_POST["u_name"];

	setcookie($cookie_name,$u_cookie,time()+3600,"/");

	if (isset($_COOKIE[$cookie_name])) {
		echo "Welcome ".$_COOKIE[$cookie_name];
	}
	else{
		echo $_COOKIE[$cookie_name]." Please Log In.";
	}
}
?>
</html>