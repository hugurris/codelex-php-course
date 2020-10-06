<?php declare(strict_types=1);

class Product
{
    private string $name;
    private int $quantity;
    private int $price;

    function __construct(string $name, int $quantity, int $price)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getQuantity(): int
    {
        return $this->quantity;
    }


    public function getPrice(): int
    {
        return $this->price;
    }

}
