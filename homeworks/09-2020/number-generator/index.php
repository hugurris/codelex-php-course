<?php declare(strict_types=1);

require_once 'NumberGenerator.php';
require_once 'NumberStorage.php';

$numberStorage = new NumberStorage();
$numberGenerator = new NumberGenerator($numberStorage->load());

$randomNumber = $numberGenerator->getNumber();
$numberGenerator->add($randomNumber);

$numberList = $numberGenerator->getAllNumbers();
$numberStorage->store($numberList);

echo 'Number list: ' . implode(' ', $numberGenerator->getAllNumbers()) . PHP_EOL;
echo 'Number: ' . $randomNumber . PHP_EOL;
echo 'AVG: ' . number_format($numberGenerator->getAvg(), 2) . PHP_EOL;
