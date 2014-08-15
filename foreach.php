<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $data_type) {
// 	if (is_int ($data_type)) {
// 		echo "{$data_type} is an integer\n";
// 	}
// 	elseif (is_float ($data_type)) {
// 		echo "{$data_type} is a float\n";
// 	}
// 	elseif (is_bool ($data_type)) {
// 		echo "{$data_type} is a boolean\n";
// 	}
// 	elseif (is_array ($data_type)) {
// 		echo "{$data_type} is an array\n";
// 	}
// 	elseif (is_null ($data_type)) {
// 		echo "{$data_type} is null\n";
// 	}
// 	elseif (is_string ($data_type)) {
// 		echo "{$data_type} is a string\n";
// 	}
// }




// foreach ($things as $data_type) {
// 	if (is_scalar ($data_type)) {
// 		echo "{$data_type} is scalar\n";
// 	}
// }



foreach ($things as $data_type) {
	if (is_scalar ($data_type)) {
		echo "{$data_type} \n";
	}
	elseif (is_array ($data_type)) {
		// $data_type2 = print_r($data_type);
		// echo "{$data_type2} \n"; 
	foreach ($data_type as $value) {
			echo "{$value} \n"; 
		}
	}	
}



?>