<?php declare(strict_types=1);

$inputMin = (int) readline("Min: ");
$inputMax = (int) readline("Max: ");

for ($i = $inputMin; $i <= $inputMax; $i++)
{
    for ($x = 0; $x <= ($inputMax - $inputMin); $x++)
    {
        if ($i + $x <= $inputMax)
        {
            echo ($i + $x) . " ";
        } else
        {
            echo (2 * $inputMax - ($i + $x)) . " ";
        }
    }
    echo "\n";
}

?>

