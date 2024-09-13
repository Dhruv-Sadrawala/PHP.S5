<!DOCTYPE html>
<html>
<?php
session_start();
?>
<head>
	<title>Session Log In</title>
</head>
<body>
	<form method="POST" action="q3_action.php">
		Enter Username:<input type="text" name="u_name"><br><br>
		Enter Email:<input type="email" name="email"><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>