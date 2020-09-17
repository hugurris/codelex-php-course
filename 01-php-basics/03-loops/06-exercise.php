<?php declare(strict_types=1);

$y = (int) readline("Enter a number: ");

for ($x = 1; $x <= $y; $x++)
{

    for ($i = 0; $i < (4 * ($y - $x)); $i++)
    {
        echo '/';
    }

    for ($i = 0; $i < (8 * ($x - 1)); $i++)
    {
        echo '*';
    }

    for ($i = 0; $i < (4 * ($y - $x)); $i++)
    {
        echo '\\';
    }

    echo "\n";
}

?>