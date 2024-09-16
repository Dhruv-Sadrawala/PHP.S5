<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Fourth</title>
	<style type="text/css">
		
		h1{
			color: hotpink;
			font-family: sans-serif;
			font-weight: bolder;
			letter-spacing: 5px;
		}

		form{
			background-color: #8ec6fe;
			border: 5px solid lightgray;
		}

		.submit{

			padding: 2px;
			border: 3px solid black;
			height: 40px;
			width: 170px;
			font-family: serif;
			font-weight: bold;
		}

		.file_sel{
			border: 1px solid white;
		}
	</style>
</head>
<body>
	<h1 align="center">PHP REGISTRATION FORM EXAMPLE</h1>
<form  enctype="multipart/form-data" method="POST">
	<table border="0" cellpadding="10px">
		<tr>
			<td>
				Enter your Name
			</td>
			<td>
				<input type="text" name="name" placeholder="Enter name">
			</td>
		</tr>
		<tr>
			<td>
				Enter your Email
			</td>
			<td>
				<input type="email" name="email" placeholder="Enter Email">
			</td>
		</tr>
		<tr>
			<td>
				Enter your Password
			</td>
			<td>
				<input type="password" name="pwd" placeholder="Enter Password">
			</td>
		</tr>
		<tr>
			<td>
				Enter your Address
			</td>
			<td>
				<textarea cols="20" rows="2" name="address" placeholder="Enter Address"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Enter your Mobile Number
			</td>
			<td>
				<input type="number" name="m_no" placeholder="Enter Number">
			</td>
		</tr>
		<tr>
			<td>
				Select your Gender
			</td>
			<td>
				Male<input type="radio" name="gender" value="Male"> &nbsp; Female<input type="radio" name="gender" value="Female">
			</td>
		</tr>
		<tr>
			<td>
				Check your Hobbies
			</td>
			<td>
				Cricket <input type="checkbox"  value="Cricket" name="hobbies[]">&nbsp;
				Singing <input type="checkbox"  value="Singing" name="hobbies[]">&nbsp;
				Dancing <input type="checkbox"  value="Dancing" name="hobbies[]">&nbsp;
			</td>
		</tr>
		<tr>
			<td>Select your Profile Pic</td>
			<td class="file_sel"><input type="file" name="pro_pic"></td>
		</tr>
		<tr>
			<td>Select your Date of Birth</td>
			<td><input type="date" name="dob"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="submit" value="REGISTER" class="submit">
			</td>
		</tr>

	</table>
</form>
</body>
</html>