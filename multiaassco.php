<?php

$input=array(
'colors'=>array("1"=>"red","2"=>"yellow","3"=>"green"),
'fruit'=>array("banana","apple","grapes")
);


foreach ($input as $value) {
	
	foreach ($value as $key=>$val) {

		echo "$val";
	}
}
?>
