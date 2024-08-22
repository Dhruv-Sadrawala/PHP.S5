<?php
$color=array(1=>"Red",2=>"Yellow",3=>"Blue",4=>"Green",1=>"Red",);

foreach ($color as $key => $value) {
	echo "$key &nbsp $value"."<br/>";
}
echo "Array Flip";
print_r(array_flip($color));
echo "<br>";
echo "Array Keys";
print_r(array_keys($color));
echo "<br>";
echo "Array Values";
print_r(array_values($color));
echo "<br>";
echo "Array Push";
array_push($color,"Violet","Magenta");
print_r($color);
echo"<br>";
?>