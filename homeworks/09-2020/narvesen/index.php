<?php declare(strict_types=1);

require_once 'Product.php';
require_once 'ProductCollection.php';
require_once 'Narvesen.php';
require_once 'ProductFormatter.php';
require_once 'PriceFormatter.php';
require_once 'QuantityFormatter.php';
require_once 'Person.php';
require_once 'PersonProducts.php';

$person = new Person('Chris', 1500);
$storage = new ProductCollection('./products.txt');
$narvesen = new Narvesen('Narvesen Saldus', $storage->load());

foreach ($narvesen->getAllProducts() as $product) {
    echo ProductFormatter::name($product->getName()) . ' ';
    echo QuantityFormatter::quantity($product->getQuantity()) . ' ';
    echo PriceFormatter::price($product->getPrice()) . ' ';
    echo "\n";
}

echo "\n";
echo 'Customer: ' . $person->getName() . ' | Money: ' . PriceFormatter::price($person->getMoney()) . PHP_EOL;

$product = $narvesen->getAllProducts()[1];
$cashback = $person->getMoney() - $product->getPrice();


do {

    if ($person->getMoney() <= $product->getPrice()) {
        echo 'Sorry, you dont have enough pesos for ' . $product->getName() . ' :: ' . PriceFormatter::price($product->getPrice()) . PHP_EOL;

    } elseif ($person->getMoney() >= $product->getPrice()) {
        echo 'You take: Product - ' . $product->getName() . ' ::' . ' Price: ' . PriceFormatter::price($product->getPrice()) . PHP_EOL;
    } else {
        break;
    }

    if ($product->getQuantity() <= 0) {
        echo 'Sorry, your preferred product are out of stock!' . PHP_EOL;
        break;
    } else {
        echo 'The product is available!' . PHP_EOL;

    }

    if ($person->getMoney() >= $product->getPrice()) {
        echo 'Your cashback: ' . PriceFormatter::price($cashback) . PHP_EOL;
        break;
    }
} while ($product->getQuantity() >= 0);


