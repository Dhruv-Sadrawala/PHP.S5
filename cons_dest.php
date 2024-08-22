<?php

class constructor{

	function __construct(){
		echo "hi.";
	}

	function __destruct(){
		echo "Bye.";
	}
}

$obj = new constructor();
?>