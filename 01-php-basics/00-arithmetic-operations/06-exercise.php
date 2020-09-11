<?php declare(strict_types=1);

// Modify the example program to compute the position of an object after falling for 10 seconds, outputting the position in meters. The formula in Math notation is:
//
//Gravity formula
//
//Note: The correct value is -490.5m.

function fallDistance($seconds) {
    $distance = 0.5 * (-9.81) * pow($seconds, 2);

    echo "In [$seconds] seconds you'll fall $distance metres.\n";
}

fallDistance(10);

?>