<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Two</title>
	<style type="text/css">
		
		body{
		height: 10vh;
		}

		tr{
		background-color: #a7dfff;
		color: white;
		}

		.submit{
		background-color: #8ec6fe;
		}
	</style>
</head>
<body>
<table width="60%" align="center"  cellpadding="10" cellspacing="2">
	<form method="POST">
		<tr>
			<td colspan="2" bgcolor="#8ec6fe" style="color:white;"><b>Registration Form</b></td>
		</tr>
		<tr>
			<td width="30%">Username</td>
			<td width="60%"><input type="text" name="name"></td>
		</tr>
		<tr>
			<td width="30%">Password</td>
			<td width="60%"><input type="password" name="pwd"></td>
		</tr>
		<tr>
			<td width="30%">User Type</td>
			<td width="60%"><select name="u_type">
				<option>--Select--</option>
				<option>Guest</option>
				<option>Admin</option>
				<option>Registered User</option>
			</select></td>
		</tr>
		<tr>
			<td width="30%">Display Name</td>
			<td width="60%"><input type="text" name="d_name"></td>
		</tr>
		<tr>
			<td width="30%">Address</td>
			<td width="60%"><textarea cols="40" rows="5" name="full_address"></textarea></td>
		</tr>
		<tr>
			<td width="30%">Email</td>
			<td width="60%"><input type="email" name="email"></textarea></td>
		</tr>
		<tr>
			<td width="30%">Gender</td>
			<td width="60%"><input type="radio" name="gender" value="male" >Male &nbsp;&nbsp;
				<input type="radio" name="gender" value="female" required>Female</td>
		</tr>
		<tr>
			<td width="30%"></td>
			<td width="60%"><input type="checkbox" name="i_accept"> I accept Terms and Conditions</td>
		</tr>
		<tr align="center" class="submit">
			<td colspan="2"> <input type="submit" name="submit" value="Submit"></td>
		</tr>
	</form>
</table>
</body>
</html>