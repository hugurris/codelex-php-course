<?php declare(strict_types=1);

Class Piglet
{

    public static function roll(): void
    {
        echo "Welcome to Piglet Game!\n";
        $question = (string) readline ('Do you want start (y/n): ');

        if ($question == 'n')
        {
            exit;
        }

        $gameOver = false
        $points = 0;

        while ($gameOver == false)
        {
            $roll = rand(1, 6);
            $points += $roll;
            echo "You rolled a $roll and you have ($points) Points!\n";

            if ($roll == 1)
            {
                $points = 0;
                $gameOver = true;
                break;
            }

            $choice = (string) readline('Roll again (y/n): ');
            if ($choice == 'n') {
                $gameOver = true;
            }
        }

        if ($gameOver)
        {
            echo "Gratz! You got $points points.\n";
        }

        if ($question !== 'y' || $question !== 'n')
        {
            exit;
        } elseif ($choice !== 'y' || $choice !== 'n')
        {
            exit;
        }
    }
}

Piglet::roll();








?>