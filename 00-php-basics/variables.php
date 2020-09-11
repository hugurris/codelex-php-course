

<?php
// exercise 1 (Create variable that prints out an integer 10, float 10.10, string "hello world")

$number = 10;
$greeting = 'hello world';
$d = 1_234.567;

echo "$number, $greeting, $d" . PHP_EOL;

// exercise 2 (Dump the same values that should display both data type & its value. (Note, usage of var_dump))

var_dump($number, $greeting, $d) . PHP_EOL;

// exercise 3 (Concatenate your name, surname and integer of your age.)
$name = 'Kristians';
$surname = 'Sauja';
$age = 20;


echo 'My name is: ' . $name . ',', ' my surname: ' . $surname . ', ', $age . ' years old...' . PHP_EOL;

?>