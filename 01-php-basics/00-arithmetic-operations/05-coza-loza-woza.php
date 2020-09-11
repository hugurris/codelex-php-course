<?php declare(strict_types=1);

// Write a program called coza-loza-woza.php
// which prints the numbers 1 to 110, 11 numbers per line.
// The program shall print "Coza" in place of the numbers which are multiples of 3,
// "Loza" for multiples of 5, "Woza" for multiples of 7,
// "CozaLoza" for multiples of 3 and 5, and so on.

$coza = 3;
$loza = 5;
$woza = 7;

for ($i=1; $i <= 100; $i++) {
    echo " ";

    if ($i % $loza == 0) {
        echo "Loza";

    } elseif ($i % $coza == 0) {
       echo "Coza";

    } elseif ($i % $woza == 0) {
        echo "Woza";

    }

    if ($i % 11 === 0) {
        echo "\n";

    }

    if ($i % $coza !== 0 && $i % $loza !== 0 && $i % $woza !== 0 ) {
        echo "$i";
    }
}

?>
