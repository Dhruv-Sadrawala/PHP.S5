<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Remember Me</title>
</head>
<body>
<form method="POST">
	
	Username: <input type="text" name="u_name" 
	value="<?php if (isset($_COOKIE['u_name'])) {
		echo $_COOKIE['u_name'];
	} ?>">
	<br><br>
	Password: <input type="password" name="pwd" 
	value="<?php if (isset($_COOKIE['pwd'])) {
		echo $_COOKIE['pwd'];
	} ?>">
	<br><br>
	Remember Me: <input type="checkbox" name="rem" <?php if (isset($_COOKIE['u_name'])) { echo 'checked'; } ?>>

	<input type="submit" name="submit" value="Submit">

</form>

<?php
    // If 'Remember Me' checkbox is checked, set the cookies
    if (!empty($_POST['rem'])) {
        setcookie("u_name", $_POST['u_name'], time() + 3600); // 1 hour
        setcookie("pwd", $_POST['pwd'], time() + 3600); // 1 hour
        echo "Cookie Set.";
    } else {
        // If 'Remember Me' is not checked, delete the cookies
        setcookie("u_name", "", time() - 3600);
        setcookie("pwd", "", time() - 3600);
        echo "Cookie not set.";
    }

?>
</body>
</html>
