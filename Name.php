<?php

$answer = rand(0, 100);

fwrite(STDOUT, 'Guess the number ');

$guess = trim(fgets)STDIN));

while ($guess > $answer) {
	echo "Too High, guess again";
} elseif ($guess < $answer) {
	echo "Too low, guess again";
}
elseif ($guess == $answer) {
	echo "Correct!";
}
else { 
	echo "Wrong. Try again.";
	}
?>

