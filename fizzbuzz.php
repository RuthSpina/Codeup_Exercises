<?php

for ($a = 1; $a <= 100; $a++){
	if ($a % 3 == 0 && $a % 5 == 0) {
		echo "{$a} FizzBuzz\n";
	}elseif ($a % 3 == 0) {
		echo "{$a} Fizz \n";
	}elseif ($a % 5 == 0){
		echo "{$a} Buzz \n";
	}else {
		echo "{$a} \n";
	}

} 

?>
