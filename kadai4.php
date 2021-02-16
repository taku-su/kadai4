<?php
echo strip_tags("Strip <i>these</i> tags!");
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
$array1 = array();
$array2 = array(1 => "data");
$result = array_merge($array1, $array2);
print_r($result);
echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo time();
date_default_timezone_set('UTC');
echo date("l");
?>