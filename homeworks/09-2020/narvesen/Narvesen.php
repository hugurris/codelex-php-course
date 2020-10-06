<?php declare(strict_types=1);

class Narvesen
{
    private string $name;
    private array $products = [];

    public function __construct(string $name, array $products)
    {
        $this->name = $name;
        $this->products = $products;
    }

    public function getAllProducts(): array
    {
        return $this->products;
    }
}


