<?php declare(strict_types=1);

echo "Input number of terms:";

$start = (int) readline (' ');
$itself = $start;
for ($i = 1; $i < $start; $i++) {
    $itself *= $start;

}
echo "Number multiplied: $itself";
?>

