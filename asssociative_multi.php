<?php

$input=array(
'colors'=>array("red","yellow","green"),
'fruit'=>array("banana","apple","grapes")
);

echo $input['colors'][1]."<br><br>";

foreach ($input as $value) {
	
	foreach ($value as $key=>$val) {

		echo "$val&nbsp;<br>";
	}
}
?>
