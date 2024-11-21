<!-- Write a PHP class called "BankAccount" with properties like "accountNumber" and "balance". Implement methods to deposit and withdraw money from the account. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bank Account</title>
</head>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
</style>
<body>
<form method="POST">
	<h3>Bank Account Details (Curr. Bal. 10,000)</h3>
	Account Number &nbsp;&nbsp; <input type="text" name="ac_no"><br><br>
	Balance &nbsp;&nbsp; <input type="number" name="bal"><br><br>
	Select Operation &nbsp;&nbsp; <select name="op">
		<option>Widthdraw</option>
		<option>Deposit</option>
	</select><br><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
<?php

if (isset($_POST['submit'])) {
	
	$ac_no = $_POST['ac_no'];
	$bal = $_POST['bal'];
	$op = $_POST['op'];
	$curr_bal = 10000;

	class BankAccount{

		function withdraw($bal,$curr_bal){
			$w_bal = $curr_bal - $bal;
			echo "<h3>Balance After Widthdrawl: ".$w_bal."</h3";
		}

		function deposit($bal,$curr_bal){
			$d_bal = $curr_bal + $bal;
			echo "<h3>Balance After Deposit: ".$d_bal."</h3";
		}
	}

	$obj = new BankAccount();

	if ($op == 'Widthdraw') {
		$obj->withdraw($bal,$curr_bal);
	}
	elseif ($op == 'Deposit') {
		$obj->deposit($bal,$curr_bal);
	}
}
?>
</html>