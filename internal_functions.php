<?php

$nothing = NULL;
$something = '';
$array = array(1, 2, 3);


// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function isset_var($var_name) {
if (isset($var_name)) {
	echo "Variable is set" . PHP_EOL;
	return;
	
}else{
	echo "Variable is empty." . PHP_EOL;
	}
}
$result_nothing = isset_var($nothing);
$result_something = isset_var($something);
$result_array = isset_var($array);


 	

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results


echo PHP_EOL;
echo "This is an unserialized array" . PHP_EOL;
print_r($array);
$b = serialize($array);
echo "This is a serialized array" . PHP_EOL;
print_r($b);
echo PHP_EOL;




// Unserialize the array $array, and output the results

