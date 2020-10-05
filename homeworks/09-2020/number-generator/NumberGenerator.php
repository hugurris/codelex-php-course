<?php declare(strict_types=1);

class NumberGenerator
{

    private array $numbers;

    public function __construct(array $numbers = [])
    {
        $this->numbers = $numbers;
    }
    public function getNumber(): int
    {
        return mt_rand(1, 1000);
    }

    public function  add(int $number): void
    {
        $this->numbers[] = $number;
    }

    public function getAllNumbers(): array
    {
        return array_filter($this->numbers);
    }

    public function getAvg(): float
    {
        return array_sum($this->getAllNumbers()) / count($this->getAllNumbers());
    }
}


