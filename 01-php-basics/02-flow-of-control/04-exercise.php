<?php declare(strict_types=1);

$input = (int) readline('Enter number of day: ');


if ($input !== 0 && $input !== 1 && $input !== 2 && $input !== 3 && $input !== 4 && $input !== 5 && $input !== 6) {
    echo "Invalid number of day, try again!\n";

} else {

    switch($input) {
        case 0:
            echo "Monday\n";
            break;
        case 1:
            echo "Tuesday\n";
            break;
        case 2:
            echo "Wednesday\n";
            break;
        case 3:
            echo "Thursday\n";
            break;
        case 4:
            echo "Friday\n";
            break;
        case 5:
            echo "Saturday\n";
            break;
        case 6:
            echo "Sunday\n";
            break;

    }

}
?>
