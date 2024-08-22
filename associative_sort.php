<?php

$num=array(1=>"10",2=>"80",3=>"50",4=>"70",5=>"20");
$num2=array("Black","Red","Yellow","Megenta","Cyan");

echo "Accociative Array Sort";
echo "<br>";
sort($num);
print_r($num);
echo "<br>";

echo "Array Sort";
echo "<br>";
sort($num2);
print_r($num2);
echo "<br>";

echo "Accociative Array Reverse  Sort";
echo "<br>";
arsort($num);//ar sort will sort accodring to key and rsort for sorting according to values
print_r($num);
echo "<br>";

echo " Reverse Array Sort";
echo "<br>";
rsort($num2);
print_r($num2);
echo "<br>";

echo "Associative Keys Array Sort";
echo "<br>";
sort($num);
print_r($num);
echo "<br>";

echo "Array Sort";
echo "<br>";
sort($num2);
print_r($num2);
echo "<br>";
?>
