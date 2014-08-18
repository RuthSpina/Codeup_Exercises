<?php

$quiz = array(
	'Where do you live?' => array(
		'a' => 'San Antonio, TX',
		'b' => 'Las Vegas, NV',
		'c' => 'Austin, TX',
		'd' => 'New York, NY' 
		),
	'What is your first name?' => array(
		'a' => 'Betty', 
		'b' => 'Susan',
		'c' => 'Ruth',
		'd' => 'Michelle'
		),
	'What is your last name?' => array(
		'a' => 'Smith',
		'b' => 'Arnold',
		'c' => 'Brennan',
		'd' => 'Spina'
		),
	'What is your favorite color?' => array(
		'a' => 'Blue',
		'b' => 'Red',
		'c' => 'Orange',
		'd' => 'Purple'
		),

	);
		
						
	foreach($quiz as $question => $answer) {

	for($value = 1; $value <= count($question); $value++) {
		echo "{$value}. {$question}\n\n";		
			echo "\t a. {$answer['a']}\n";	
			echo "\t b. {$answer['b']}\n";
			echo "\t c. {$answer['c']}\n";
			echo "\t d. {$answer['d']}\n\n";

	  }
	}
	


	?>


