<?php declare(strict_types = 1);

// 0 = rock
// 1 = paper
// 2 = scissors
$combinations = [
    0 => 2, // rock wins scissors
    1 => 0, // paper wins rock
    2 => 1 // scissors wins paper
];
$pc = rand(0, 2);

$input = (int) readline('Enter 0=rock, 1=paper, 2=scissors');
echo "PC : $pc VS $input : You" . PHP_EOL;

if ($input === $pc) {
    echo 'DRAW' . PHP_EOL;

} elseif ($combinations[$input] == $pc) {
    echo 'WIN' . PHP_EOL;
} else {
    echo 'LOOSE' . PHP_EOL;

}




?>