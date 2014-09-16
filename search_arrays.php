
<?php

 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


 function true_false($input, $array) {

 $result = array_search($input, $array);
 if ($answer){

 	echo 'TRUE' . PHP_EOL;

 }else{
 	 echo 'FALSE' . PHP_EOL;
 }
}

function array_compare($array1, $array2){
	$i = 0;
	foreach($array1 as $name){
		$answer = (true_false($name, $array2));
		$result = array_search()
		if($answer){
			
			echo "True" . PHP_EOL;
			
		}else{
			$i++;
			return $answer;
			//return "FALSE" . PHP_EOL;
				
		}
	
	}
}

	


$result = array_compare($names, $compare);
echo "$result" . PHP_EOL;



 // $answer = true_false('Ruth', $names);
 // return "$answer" . PHP_EOL;

?>











 


