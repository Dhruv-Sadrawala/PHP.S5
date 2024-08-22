<?php

function min_m($arr){
	
	print_r("Min is : ".min($arr));
	echo "<br>";

}

function max_m($arr){
		
	print_r("max is : ".max($arr));
}

$arr=array(1,2,3,4,5);

min_m($arr);
max_m($arr);

?>