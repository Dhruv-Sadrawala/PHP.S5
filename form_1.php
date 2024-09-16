<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form One</title>
</head>
<body>
	<h1>Tutorials Point Absolute Classes Registration</h1>
<form method="POST">
	<table border="0" cellpadding="10px">
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>E-mail:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Specific Time:</td>
			<td><input type="text" name="time"></td>
		</tr>
		<tr>
			<td>Class Details:</td>
			<td><textarea cols="50" rows="7" name="class_details"></textarea></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<td><input type="radio" name="gender">Female &nbsp; <input type="radio" name="gender">Male</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>
</body>
</html>