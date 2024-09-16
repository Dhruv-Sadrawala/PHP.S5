<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Fifth</title>
	<style type="text/css">
		
		body{
			
			font-family: sans-serif;
			font-weight: bold;
		}

		h3{
			
			font-style: italic;
			font-weight: bold;
		}

		input{

			height: 30px;
			width: 230px;
			border: 2px solid gray;
			border-radius: 5px;
			font-size: 15px;
		}

		select{
			
			height: 35px;
			width: 50px;
			border: 2px solid gray;
			border-radius: 5px;

		}

		textarea{

			border: 2px solid gray;
			border-radius: 5px;
		}

		.ph_no{
			
			height: 30px;
			width: 170px;
			border: 2px solid gray;
			border-radius: 5px;
		}

		.reason{

			height: 38px;
			width: 237px;
			border: 2px solid gray;
			border-radius: 5px;
		}

		.submit{

			background-color: #08688c;
			color: white;
			border: none;
			border-radius: 0;
			height: 40px;
			width: 85px;
		}
	</style>

	<script type="text/javascript">
		
		function focusElement(element) {
            element.style.borderColor = 'red';
        }

	</script>
</head>
<body>
<h3>Please Contact Us</h3>
<hr width="100%" height="2px">

<form method="POST">
	<table cellpadding="7px" cellspacing="2px">
		<tr>
			<td width="30%">Name<font color="red">*</font></td>
			<td width="70%"><input type="text" name="name" onclick="focusElement(this)"></td>
		</tr>
		<tr>
			<td width="30%">Email<font color="red">*</font></td>
			<td width="70%"><input type="email" name="email"></td>
		</tr>
		<tr>
			<td width="30%">Phone<font color="red">*</font></td>
			<td width="70%"><select name="cnt_code">
				<option>+91</option>
				<option>+92</option>
				<option>+93</option>
			</select>&nbsp;&nbsp;<input type="number" name="ph_no" class="ph_no"></td>
		</tr>
		<tr>
			<td width="30%">Regarding</td>
			<td width="70%"><select name="reg" class="reason">
				<option>General Question</option>
				<option>Inquiry</option>
				<option>Visit</option>
			</select></td>
		</tr>
		<tr>
			<td width="30%">Message<font color="red">*</font></td>
			<td width="70%"><textarea cols="29.5" rows="5"></textarea></td>
		</tr>
		<tr>
			<td width="30%"></td>
			<td width="70%"><input type="submit" name="submit" value="Submit" class="submit"></td>
		</tr>
	</table>
</form>
</body>
</html>