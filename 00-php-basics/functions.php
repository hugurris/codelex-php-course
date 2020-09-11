<?php declare(strict_types = 1);

// exercise 1 (Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
// Print this value out.)

function msg($string) {
    echo "$string codelex" . PHP_EOL;
}

msg("Hello");

// exercise 2 (Create a function that accepts 2 integer arguments. First argument is a base value and the second one is a value its been multiplied by.
// For example, given argument 10 and 5 prints out 50)

function acceptsNumbers(int $a, int $b) {
    return "Numbers has been multiplied, score is: ". $a * $b;

}

echo acceptsNumbers(10, 5) . PHP_EOL;


// exercise 3 (Create a person object with name, surname and age. Create a function that will determine if the person has reached 18 years of age.
// Print out if the person has reached age of 18 or not.)

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 78

];

function ageChecker($person) {
    if ($person["age"] >= 18) {
        echo "Welcome, " . $person["name"] . ", you're old enough!" . PHP_EOL;
    } else {
        echo "Sorry, " . $person["name"] . ", you are to young!" . PHP_EOL;
    }

}

ageChecker($person);

// exercise 4 (Create a array of objects that uses the function of exercise 3
// but in loop printing out if the person has reached age of 18.)

$persons = [
    [
        "name" => "Mark",
        "surname" => "Doe",
        "age" => 17
    ],
    [
        "name" => "Jane",
        "surname" => "Doe",
        "age" => 32
    ],
    [
        "name" => "Thomass",
        "surname" => "Doe",
        "age" => 10
    ]
];

foreach ($persons as  $person) {
    ageChecker($person) . PHP_EOL;

}

// exercise 5 (Create a 2D associative array in 2nd dimension with fruits and their weight.
// Create a function that determines if fruit has weight over 10kg.
// Create a secondary array with shipping costs per weight. Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
// Using foreach loop print out the values of the fruits and how much it would cost to ship this product.)

$fruits = [
    [
        "name" => "Banana",
        "weight" => 15
    ],
    [
        "name" => "Apple",
        "weight" => 9
    ],
    [
        "name" => "Orange",
        "weight" => 10
    ],
    [
        "name" => "Lemon",
        "weight" => 4
    ]

];

$shippingWeightCosts = [
    'below_10kg' => '1 €',
    'over_10kg' => '2 €'
];


function calculateShippingCosts($fruit, $cost) {
    if ($fruit['weight'] >= 10) {
        echo "Shipping cost for {$fruit['name']}, {$fruit['weight']} kg will be {$cost['over_10kg']} and zero cents!" . PHP_EOL;
    } else {
        echo "Shipping cost for {$fruit['name']}, {$fruit['weight']} kg will be {$cost['below_10kg']} and zero cents! (because it does not exceed the kilogram limit)" . PHP_EOL;
    }
}


foreach ($fruits as $fruit) {
    calculateShippingCosts($fruit, $shippingWeightCosts);
}

// exercise 6 (Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
// Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
// Create a function that doubles the integer number.
// Within the loop using php in-built function print out the double of the number value (using your custom function)

$elements = [1, 4, 10, 0.3, "Luke, I am Your father!"];

function doubleIfInt($var) {
    if (gettype($var) === "integer") {
        return $var * 2;
    } else {
        return "Not an integer...";
    }
}

for ($i = 0; $i < count($elements); $i++) {
    echo doubleIfInt($elements[$i]) . "\n";
}


// exercise 7 (Imagine you own a gun store.
// Only certain guns can be purchased with license types.
// Create an object (person) that will be the requester to purchase a gun (object)
// Person object has a name, valid licenses (multiple) & cash.
// Guns are objects stored within an array.
// Each gun has license letter, price & name.
// Using PHP in-built functions determine if the requester (person) can buy a gun from the store.)

function paint(string $color) {
    return 'red';
}

echo paint('1') . PHP_EOL;


?>