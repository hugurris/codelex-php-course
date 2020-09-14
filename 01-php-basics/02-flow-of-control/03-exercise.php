<?php declare(strict_types=1);

echo 'Enter number: ';
$input = (int) readline();

if ($input > 0) {
    echo "Number has " . count(str_split($input)) . " digit!\n";

} else {
    echo "Invalid number, error!\n";

}



?>