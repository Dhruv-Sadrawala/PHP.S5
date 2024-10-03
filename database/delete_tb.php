<?php
$con = mysqli_connect('localhost', 'root', '', 'mydatabase');

$sql="DROP TABLE student1";

mysqli_query($con,$sql);

mysqli_close($con);
?>
