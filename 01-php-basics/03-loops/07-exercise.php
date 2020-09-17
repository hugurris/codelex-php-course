<?php declare(strict_types=1);

class RollTwoDice
{

    private int $firstDice;
    private int $secondDice;
    private int $diceSum;

    public function __construct()
    {
        $this->rollDice();
    }

    public function rollDice(): void
    {
        $this->firstDice = rand(1, 6);
        $this->secondDice = rand(1, 6);
        $this->diceSum = $this->firstDice + $this->secondDice;
    }

    public function playDice(): void
    {
        $input = (int) readline ('Desired sum: ');

        if ($input > 12)
        {
            echo 'Something went wrong! Please try again, choose Dice sum from 0 to 12!' . PHP_EOL;
            $input = (int) readline ('Desired sum: ');
            exit;
        }

        while ($input !== $this->diceSum)
        {
            $this->rollDice();
            echo "$this->firstDice + $this->secondDice = $this->diceSum\n";
            sleep(1);
        }

        if ($input == $this->diceSum)
        {
            echo "You are lucky: $this->firstDice + $this->secondDice = $this->diceSum\n";
        }
    }
}

$playGame = new RollTwoDice();
$playGame->playDice();



?>