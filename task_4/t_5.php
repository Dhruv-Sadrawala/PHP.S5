<!-- Write a PHP program to identify the email addresses which are not unique. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Not Unique Emails</title>
</head>
<body>
<style type="text/css">
	body{
		font-family: sans-serif;
	}
</style>
</body>
<?php

$array_emails = array("abc@gmail.com","avf@gmail.com","ghi@gmail.com","fgt@gmail.com","abc@gmail.com","avf@gmail.com");

$array_new = array();
$array_duplicate = array();

for ($i = 0; $i < count($array_emails); $i++) { 
   
    if (!in_array($array_emails[$i], $array_new)) {
        
        $array_new[] = $array_emails[$i];
    } 
    else {
        
        if (!in_array($array_emails[$i], $array_duplicate)) {
        
            $array_duplicate[] = $array_emails[$i];
        }
    }
}

echo "<h3>Duplicate email(s) is/are :</h3>";

for ($i=0; $i < count($array_duplicate); $i++) { 
	echo "<h3>".$array_emails[$i]." </h3>";
}
?>
</html>