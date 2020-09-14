<?php declare(strict_types=1);

$integers = [];

for ($i = 0; $i <= 10; $i++) {
    $integers[$i] = rand(1, 100);
}


$secondIntegers = $integers;
$integers[10] = -7;

echo 'Array 1: ';
foreach ($integers as $integer) {
    echo "$integer ";

}

echo "\nArray 2: ";
foreach ($secondIntegers as $secondInteger) {
    echo "$secondInteger ";

}
?>