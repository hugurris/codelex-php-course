<?php declare(strict_types=1);

class ProductCollection
{

    private string $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function load(): array
    {
        $content = file_get_contents($this->path);
        $rows = array_filter((array)explode('|', $content));
        $products = [];

        foreach ($rows as $row) {
            $productData = (array)explode(';', $row);
            $products[] = new Product(
                trim($productData[0]),
                (int)$productData[1],
                (int)$productData[2],
            );
        }

        return $products;
    }
}

