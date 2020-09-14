<?php declare(strict_types=1);

echo "Enter the number: \n";
$enterNumb = (int) readline ( );

if ($enterNumb >= 0) {
    echo "$enterNumb is positive number!\n";
} else {
    echo "$enterNumb is negative number!\n";
}