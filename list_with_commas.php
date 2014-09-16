<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicists_array = explode(', ', $physicists_string);



// array_pop($physicists_array);
// var_dump($physicists_array);

// array_push($physicists_array, 'and Tony Stark');
// var_dump($physicists_array);

// $physicists_string = implode(', ', $physicists_array);
// var_dump($physicists_string);

// function humanized_list($array) {
// 	$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
	
// 	array_pop($array);

// 	array_push($array, 'and Tony Stark');

// 	$famous_fake_physicists = implode(', ', $array);

// 	var_dump($famous_fake_physicists);
// }


// $humanized_list = humanized_list($physicists_array);
//echo "Some of the most famous fictional theoretical physicists are $humanized_list." . PHP_EOL;


 asort($physicists_array);
 $physicists_array = array_values($physicists_array);
 print_r($physicists_array);



// $physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// $physicists_array = explode(', ', $physicists_string);

// var_dump($physicists_array) . PHP_EOL;

// echo "Type (Y) if you would like to sort in alphabetical order" . PHP_EOL;

// $input = strtoupper(trim(fgets(STDIN)));

// if($input == 'Y'){
    // asort($physicists_array);
    //  $physicists_array = array_values($physicists_array);
    //   echo 'Array in Alphabetical Order:' . PHP_EOL;
//   print_r($physicists_array);
// }else{
// 	echo 'No changes made.';
// }

?>

