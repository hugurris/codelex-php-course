<?php declare(strict_types=1);

class NumberStorage
{
    public function load(): array
    {
        return (array) explode(' ', file_get_contents('./number.txt'));
    }
    public function store(array $numbers): void
    {

        file_put_contents('./number.txt', implode(' ', $numbers));
    }
}

