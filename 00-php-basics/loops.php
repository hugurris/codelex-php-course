<?php

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// exercise 1 (Create an array with integers (up to 10) and print them out using foreach loop.)
foreach ($numbers as $number) {
    echo "$number" . PHP_EOL;
};

// exercise 2 (Create an array with integers (up to 10) and print them out using for loop.)

$items = [2, 4, 6, 8, 10];

    for ($i = 0; $i < count($items); $i++) {
        echo $items[$i]  . PHP_EOL;
    };

// exercise 3 (Given variable $x = 1 while $x is lower than 10, print out text "codelex". (Note: To avoid infinite looping, after each print increase the variable $x by 1))

$x = 1;

while($x <= 10) {
    echo "codelex" . PHP_EOL;
    $x++;

}

// exercise 4 (Create a non associative array with integers and print out only integers that divides by 3 without any left.)

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $number) {
    if ($number % 3 === 0) {
        echo "Number: $number divides by 3" . PHP_EOL;
    }
}

// exercise 5 (Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.)

$players = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50,
            "birthday" => "1. October"
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41,
            "birthday" => "1. May"
        ],
        [
            "name" => "Karl",
            "surname" => "Fighter",
            "age" => 41,
            "birthday" => "1. December"
        ]
    ]
];

foreach($players as $result) {
    echo 'First Player: (NAME and SURNAME) ' . $result[0]["name"] . ' ' . $result[0]["surname"] . ' | ' . $result[0]["age"] . ' (YEARS OLD) | ' . $result[0]["birthday"] . ' (BIRTHDAY) ' . PHP_EOL;
    echo 'Second Player: (NAME and SURNAME) ' . $result[1]["name"] . ' ' . $result[1]["surname"] . ' | ' . $result[1]["age"] . ' (YEARS OLD) | ' . $result[1]["birthday"] . ' (BIRTHDAY) ' . PHP_EOL;
    echo 'Third Player: (NAME and SURNAME) ' . $result[2]["name"] . ' ' . $result[2]["surname"] . ' | ' . $result[2]["age"] . ' (YEARS OLD) | ' . $result[2]["birthday"] . ' (BIRTHDAY) ' . PHP_EOL;
}



//foreach($players as $value) {
 //   print_r ($value);
//}

?>