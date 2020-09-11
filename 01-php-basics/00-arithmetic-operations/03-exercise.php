<?php

// Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.

function comp ($lowerb, $upperb) {
    $comp = 1;

    for ($i = $lowerb; $i <= $upperb; $i++) {
        $comp *= $i;
    }


    echo "$lowerb to $upperb is $comp" . PHP_EOL;
}

comp(1, 10);
?>