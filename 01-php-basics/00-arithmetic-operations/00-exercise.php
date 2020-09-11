<?php declare(strict_types=1);

// Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.

function checkIntegers(int $x, int $y) {
    if ($x === 15 || $y === 15 || ($x + $y) === 15 || ($x - $y) === 15 || ($y - $x) === 15) {
        return true;
    } else {
        return false;
    }
}

echo checkIntegers(15, 14) . PHP_EOL;
echo checkIntegers(1, 14) . PHP_EOL;
echo checkIntegers(30, 15) . PHP_EOL;
echo checkIntegers(15, 0) . PHP_EOL;


?>

