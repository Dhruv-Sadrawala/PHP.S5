<?php
$con = mysqli_connect('localhost', 'root', '', 'mydatabase');

$sql="CREATE TABLE student1 (enroll_no int(5),name varchar(20))";

mysqli_query($con,$sql);

mysqli_close($con);
?>