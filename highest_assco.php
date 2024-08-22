<?php

$array_movie = array(1=>45,2=>34,3=>90,4=>60);

$high_index = array_keys($array_movie);
$high_values = current($array_movie);

foreach ($array_movie as $key => $value) {
	
	if ($value > $high_values) {
		
		$high_values = $value;
		$high_index = $key;
	}
}


echo $high_values . " is having highest index of ". $high_index;
?>