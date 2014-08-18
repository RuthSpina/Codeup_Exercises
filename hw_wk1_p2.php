<?php

$quiz = array(
	'Where do you live?' => array(
		'a' => 'San Antonio, TX',
		'b' => 'Las Vegas, NV',
		'c' => 'Austin, TX',
		'd' => 'New York, NY' 
		),
		'correct_answer' => 'a'
	'What is your first name?' => array(
		'a' => 'Betty', 
		'b' => 'Susan',
		'c' => 'Ruth',
		'd' => 'Michelle'
		),
		'correct_answer' => 'c'
	'What is your last name?' => array(
		'a' => 'Smith',
		'b' => 'Arnold',
		'c' => 'Brennan',
		'd' => 'Spina'
		),
	'correct_answer' => 'd' 
	'What is your favorite color?' => array(
		'a' => 'Blue',
		'b' => 'Red',
		'c' => 'Orange',
		'd' => 'Purple'
		),
	'correct_answer'=> 'a'

	);
		
						
	foreach($quiz as $question => $answer) {
		//$question_number. {$value['question']};

		//$correct_answer = "{$value['correct_answer']}";
		//foreach ($value['answers'] as $answer_choice => $answer_content) {
		//if ($answerchoice == $correctanswer);
	}
		//echo "\t* $answerchoice $answercontent . EOL.PHP;"
		//else{
		//"\t $answerchoice $answercontent . EOL.PHP;"
	}
	}

	for($value = 1; $value <= count($question); $value++) {
		echo "{$value}. {$question}\n\n";		
			echo "\t a. {$answer['a']}\n";	
			echo "\t b. {$answer['b']}\n";
			echo "\t c. {$answer['c']}\n";
			echo "\t d. {$answer['d']}\n\n";

	  }
	}
	//correct answer should be added as answer option.


	?>


