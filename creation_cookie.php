<?php

$cookie_name="emp";
$cookie_value="ABC";
setcookie($cookie_name,$cookie_value,time()+(86400),"/")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie Set</title>
</head>
<body>

</body>

<?php

if (!isset($_COOKIE['emp'])) {
	
	echo "Cookie not set";
}
else{
	echo "Cookiee name:$cookie_name"."<br>";
	echo "Cookie Value:".$_COOKIE[$cookie_name];
}
?>
</html>