<?php
function concateString($a, $b){
	$restult = $a. ' '. $b; //here dot (.) is user for concate two string
 	return $restult;
}
concateString('I am','a Student');

function concateArray($a, $b){
	$restult = array_merge($a,$b); //array_merge() function merges one or more arrays into one array
 	return $restult;
}

$output = concateArray(array(3,5,4), array(5,9,8));
print_r($output);
?>
