<?php declare(strict_types=1);

$numbers = [20, 30, 25, 35, -16, 60, -100];

$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}

$avr = $sum / count($numbers);

echo "Average value: $avr" . PHP_EOL;