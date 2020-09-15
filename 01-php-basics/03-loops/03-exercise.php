<?php declare(strict_types=1);

$firstWord = (string) readline ('Enter first word: ');
$secondWord = (string) readline ('Enter second word: ');

echo "$firstWord\n";
$dots = 30;
$words = $dots - strlen($firstWord) - strlen($secondWord);
for ($i = 1; $i <= $words; $i++) {
    echo '.';

}
echo "$secondWord\n";







?>