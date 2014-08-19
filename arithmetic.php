<?php

$a = 5;
$b = 0;

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
	return $a + $b;
		
	
	} else {
		echo "ERROR: Both arguments ($a, $b) must be numbers." . PHP_EOL;

	}
}


function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
	return $a - $b;
		
	
	} else {
		echo "ERROR: Both arguments ($a, $b) must be numbers." . PHP_EOL;

	}
}	

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
	return $a * $b;
		
		
	} else {
		echo "ERROR: Both arguments ($a, $b) must be numbers.";
		echo PHP_EOL;
	}
}

function divide($a, $b) {
	if ($b == 0 || $a == 0){
		echo "ERROR: Cannot divide by zero";
		echo PHP_EOL;
	} 
	elseif(is_numeric($a) && is_numeric($b)){
	return $a/$b;
		echo "The sum of $a divided by $b is $sum_div" . PHP_EOL;
	}
	else{
		echo "ERROR: argument must be numeric";
		echo PHP_EOL;
		
	}
} 	

function modulus($a, $b) {
	if ($b == 0 || $a == 0){
		echo "ERROR: Cannot divide by zero." . PHP_EOL;  
	} 
	elseif(is_numeric($a) && is_numeric($b)){
	return $a % $b;
		echo "The sum of $a modulus $b is $sum_mod" . PHP_EOL;
	}
	else{
		echo "ERROR: argument must be numeric." . PHP_EOL;
	
	}
}	



$sum_add = add($a, $b);
	echo "The sum of $a plus $b is $sum_add" . PHP_EOL;
	

$sum_sub = subtract($a, $b);
	echo "The sum of $a minus $b is $sum_sub" . PHP_EOL;
	

$sum_multiply = multiply($a, $b);
	echo "The sum of $a multiplied by $b is $sum_multiply" . PHP_EOL;
	

$sum_div = divide($a, $b);
	

$sum_mod = modulus($a, $b);
	


