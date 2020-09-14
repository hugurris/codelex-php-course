<?php declare(strict_types=1);

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

    do {

        echo "\nEnter the value to search for:\n";
        $check = readline("> ") . PHP_EOL;


    if (in_array ($check, $numbers)) {
        echo "Correct! This value contains in array: $check GOOD JOB!" . PHP_EOL;
        break;
    } else {
        echo "Wrong, this value doesn't not contain number in array! Please try again!" . PHP_EOL;
    }
        } while ($check !== $numbers );