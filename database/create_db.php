<?php
$con = mysqli_connect('localhost', 'root', '');

$sql="CREATE DATABASE mydatabase";

$qr=mysqli_query($con,$sql);

if ($qr) {
	echo "Database Created";
}
else{
	echo "Database Not Created";
}

mysqli_close($con);
?>
