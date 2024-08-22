<?php

echo "<pre>";
$str="    This is exmaple of string     ";
$str1="    This is exmaple of string2     ";
echo "String Lenght:".strlen($str)."<br>";
echo "String Reverse:".strrev($str)."<br>";
echo "String Uppercase:".strtoupper($str)."<br>";
echo "String Lowercase:".strtolower($str)."<br>";
echo "String Word Count:".str_word_count($str)."<br>";
print_r(str_split($str));
print_r(str_split($str,3));
echo "$str <br>";
echo "String Trim:".trim($str)."<br>";
echo "String Compare:".strcmp($str, $str1)."<br>";
echo "String Case Compare:".strcasecmp($str, $str1)."<br>";
echo "String Shuffle:".str_shuffle($str)."<br>";

?>