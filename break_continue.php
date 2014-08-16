<?php

for ($num = 1; $num <= 100; $num++) {
	echo $num . "\n";
	if ($num % 2 == 0) {
	continue;

}
elseif ($num % 2 != 0) {
		echo "^ is an even number\n";
	}
}
?>

////review///

<?php


for ($num = 1; $num <= 100; $num++) {
if( $i % 2 != 0)
{
	continue;
}
echo $i  . PHP.EOL;

if ($i >= 10)
//if I get to 10 I don't want to keep looping
	{
		break;
	}
}
?>
