<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Three/Signup</title>
	<style type="text/css">
		
		body{
			background-color: #12a67b;
			font-family: sans-serif;
		}
		div{
			background-color: white;
			margin-top:150px;
			margin-right:575px;
			margin-left:575px;
			display:flex;
			justify-content: center;
			align-content: center;
			border-radius: 8px;
			height: 250;
		}
		form input{

			height: 36px;
			width: 280px;
			border: 2px solid gray;
			background-color: transparent;
			border-radius: 5px;
			color: gray;
			font-weight: bolder;
			padding: 5px;
		}

		a{
			color: #12a67b;
			text-decoration: none;
			font-weight: bold;
		}

		.submit{
			width: 295px;
			font-size: 17px;
			background-color: #12a67b;
			color: white;
			font-weight: bold;
			border: none;
		}

		.submit:hover{
			width: 295px;
			font-size: 17px;
			background-color: #045840;
			transition: ease 0.5s;
		}
	</style>
</head>
<body>
	<div>
<form method="POST">
	
	<h1 align="center">Signup</h1>
	<input type="email" name="email" placeholder="Enter your email" align="center"><br><br>
	<input type="password" name="pwd" placeholder="Enter your password" align="center"><br><br>
	<input type="password" name="re_pwd" placeholder="Retype your password" align="center"><br><br>
	<input type="submit" name="submit" value="Signup" class="submit" align="center"><br>
	<p align="center">Already have an account?<a href="form_3_1.php">Login</a></p>



</form>
</div>
</body>
</html>