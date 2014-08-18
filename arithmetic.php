<?php

$a = 6;
$b = 0;

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
		echo $a + $b;
	} else {
		echo "ERROR: Both arguments ($a, $b) must be numbers.";

		echo PHP_EOL;
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
		echo $a - $b;
		echo PHP_EOL;
	} else {
		echo "ERROR: Both arguments ($a, $b) must be numbers.";
		echo PHP_EOL;

	}
}	
function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
		echo $a * $b;
		echo PHP_EOL;
	} else {
		echo "ERROR: Both arguments ($a, $b) must be numbers.";
		echo PHP_EOL;
	}
}
function divide ($a, $b) {
	if ($b == 0 || $a == 0){
		echo "ERROR: Cannot divide by zero";
		echo PHP_EOL;
	} 
	elseif(is_numeric($a) && is_numeric($b)){
		echo $a/$b;
		echo PHP_EOL;
	}
	else{
		echo "ERROR: argument must be numeric";
		echo PHP_EOL;
		
	}
} 	

function modulus ($a, $b) {
	if ($b == 0 || $a == 0){
		echo "ERROR: Cannot divide by zero";  
		echo PHP_EOL;
	} 
	elseif(is_numeric($a) && is_numeric($b)){
		echo $a%$b;
		echo PHP_EOL;
	}
	else{
		echo "ERROR: argument must be numeric.";
		echo PHP_EOL;
	}
}	

add($a, $b);

subtract($a, $b);

multiply($a, $b);

divide($a, $b);

modulus ($a, $b);
