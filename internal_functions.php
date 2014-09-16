<?php

$nothing = NULL;
$something = '';
$array = array(1, 2, 3);

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

echo PHP_EOL;
echo "This is an unserialized array" . PHP_EOL;
print_r($array);
$b = serialize($array);
echo "This is a serialized array" . PHP_EOL;
print_r($b);
echo PHP_EOL;

?>

