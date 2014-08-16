<?php

$directory = array(
	'1' => array('first_name' => 'Ruth', 'last_name' => 'Spina', 
		'phone_number' => '210-233-2323', 
		'address' => '123 Grand Canyon, San Antonio, Tx 78228'
	),
	'2' => array('first_name' => 'Lisa', 'last_name' => 'Simms', 
		'phone_number' => '210-344-3434', 
		'address' => '339 Carlota, San Antonio, Tx 78258'
	),

	'3' => array('first_name' => 'Sonia', 'last_name' => 'Vallejo', 
		'phone_number' => '210-445-4545', 
		'address' => '2142 Cincinnati, San Antonio, Tx 78232'
	),

	'4' => array('first_name' => 'Bob', 'last_name' => 'David', 
		'phone_number' => '210-667-6767', 
		'address' => '3342 Astreet, San Antonio, Tx 78554'
	)
);

foreach($directory as $num => $detail) {
	echo "{$num} .  {$detail['first_name']} {$detail[last_name]}\n";
	echo "\t Phone: {$detail['phone_number']}\n";
	echo "\t Address: {$detail['address']}\n";
}

?>

