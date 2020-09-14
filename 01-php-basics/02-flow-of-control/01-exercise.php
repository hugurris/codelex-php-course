<?php declare(strict_types=1);

echo "Input the 1st number: ";
$numOne = (int) readline( );
echo "Input the 2nd number: ";
$numTwo = (int) readline( );
echo "Input the 3rd number: ";
$numThree = (int) readline( );

$numbers = [
    $numOne,
    $numTwo,
    $numThree
];

sort($numbers);
echo "Largest number is: $numbers[2]\n";





?>