<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session</title>
</head>
<body>

</body>
<?php

if (!isset($_SESSION['page_count'])) {
	
	$_SESSION['page_count']=1;

}
else
{
	$_SESSION['page_count']+=1;
	echo "Session:".$_SESSION['page_count'];
}
?>
</html>