<?php

if (isset($_POST['submit'])) {

	if (!empty($_POST['email'] && $_POST['u_name'])) {
		
		$_SESSION['username']=$_POST['u_name'];
		$_SESSION['email']=$_POST['email'];

	echo "Username:".$_SESSION['username']."<br>";
	echo "Email:".$_SESSION['email'];
	}

	else{
	echo "First log in.";
	}
	
}


?>