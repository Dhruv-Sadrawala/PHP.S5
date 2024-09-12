<?php

session_start();
$_SESSION['name']=$_POST['u_name'];
$_SESSION['id']=$_POST['u_id'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Session</title>
</head>
<body>
	<form method="POST">
		Enter Name <input type="text" name="u_name"><br><br>
		Enter ID <input type="text" name="u_id"><br><br>
		<input type="submit" name="submit" value="Submit"><br><br>
		<input type="submit" name="reset" value="Destroy Session">
	</form>
</body>
<?php

if (isset($_POST['submit'])) {
	
	echo "Name:".$_SESSION['name']."<br><br>";
	echo "ID:".$_SESSION['id']."<br><br>";
}
if (isset($_POST['reset'])) {
	session_destroy();
	echo "Session Destroyed";
}
?>
</html>