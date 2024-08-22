<?php

$array_movie = array(
	"Fighter"=>array("Ratings:"=>5,"Director:"=>"Sudipto Sen"),
	"Junglee"=>array("Ratings:"=>2,"Director:"=>"Ashok")
);

foreach ($array_movie as $key => $value) {
	
	echo "<br><h4>".$key."</h4><br><br>";

	foreach ($value as $k => $v){
		echo $k . $v . "<br>";
	}
}
?>