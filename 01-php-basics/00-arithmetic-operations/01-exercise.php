<?php declare(strict_types=1);

// Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd, or “Even Number” otherwise. The program shall always print “bye!” before exiting.

function checkOddEven (int $number) {
    if ($number % 2 === 0) {
        echo "$number : Its Odd Number" . PHP_EOL;

    } else {
        echo "$number : Its Even Number" . PHP_EOL;

    }

    echo 'Bye!' . PHP_EOL;

}

echo checkOddEven(4);
echo checkOddEven(5);

?>