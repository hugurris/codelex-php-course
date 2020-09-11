<?php

// exercise 1 (Given variables (int) 10, string "10" determine if they both are the same.)

$x = 10;
$y = '10';

if ($x == $y) {
    echo "Equal!" . PHP_EOL;

} else {
    echo "Not Equal" . PHP_EOL;
};


// exercise 2 (Given variable (int) 50, determine if its in the range of 1 and 100.)
$needed = 50;
$min = 1;
$max = 100;

if ($needed <= $max || $needed >= $min) {
    echo "In range!" . PHP_EOL;

} else {
    echo "Out of range!" . PHP_EOL;
};

// exercise 3 (Given variables (string) "hello" create a condition that if the given value is "hello" then output "world".)

$greet = 'hello';

if ($greet == 'hello') {
    echo "$greet world" . PHP_EOL;

} else {
    echo "you are an idiot!" . PHP_EOL;

}

// exercise 4 (By your choice, create condition with 3 checks.
// For example, if value is greater than X, less than Y and is an even number.)

$val = 6;
$remainder = $val % 2;


if ($val > 3) {
    echo "is greater than x" . PHP_EOL;
} elseif ($val < 10) {
    echo "less than y"  . PHP_EOL;
} elseif ($remainder == 0) {
    echo "$remainder Is even" . PHP_EOL;
} else {
    echo "You are wrong, its Odd" . PHP_EOL;

}

// exercise 5 (Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
// (Range should be stored within the 2 separated variables $y and $z.)

$given = 50;
$y = 1;
$z = 100;

if ($needed <= $max || $needed >= $min) {
    echo "correct!" . PHP_EOL;

} else {
    echo "incorrect!" . PHP_EOL;
}

// exercise 6 (Create a variable $plateNumber that stores your car plate number.)
// Create a switch statement that prints out that its your car in case of your number.)

$plateNumber = "KS-1337";

switch ($plateNumber) {
    case "KS-1337":
        echo "Its mine car plate number ($plateNumber)";
            break;
    case "GGL-1234":
        echo "Its not mine car plate number";
            break;
}

// exercise 7 (Create a variable $number with integer by your choice.)
// (Create a switch statement that prints out text "low" if the value is under 50,
// "medium" if the case is higher than 50 but lower than 100, "high" if the value is >100.)

$number = 30;

switch ($number) {
    case 30:
        echo "low if the value is under 50" . PHP_EOL;
        break;
    case 79: "medium if the case is higher than 50 but lower than 100" . PHP_EOL;
        break;
    case 65:
        echo "high if the value is >100" . PHP_EOL;
        break;
}


?>
