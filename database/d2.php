<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Insert</title>
</head>
<body>
<form method="POST">
	Id <input type="text" name="id"><br>	I
	Name <input type="text" name="name"><br>
	Email<input type="text" name="email"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
<?php

if (isset($_POST['submit'])) {

	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];

	$con = mysqli_connect('localhost', 'root', '', 'mydatabase');

if(!$con)
	echo "Not connected";


$sql="CREATE TABLE honey (id int(5),name varchar(20), email varchar(20))";

mysqli_query($con,$sql);


$ins="INSERT INTO honey (id,name,email) values ($id,'$name','$email')";

$insert_qu=mysqli_query($con,$ins);

if(!$insert_qu)
	echo "not inserted";


mysqli_close($con);
}



?>
</html>
