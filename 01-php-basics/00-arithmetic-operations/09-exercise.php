<?php declare(strict_types=1);

    function circleArea($radius) {
        return pi() * pow($radius, 2);

    }

    function rectangleArea($length, $width) {
        return $length * $width;
    }

    function triangleArea($base, $height) {
        return $base * $height* 0.5;
    }

do {

    echo " \n Geometry Calculator: \n" . PHP_EOL;
    echo " 1. Calculate the Area of a Circle" . PHP_EOL;
    echo " 2. Calculate the Area of a Rectangle" . PHP_EOL;
    echo " 3. Calculate the Area of a Triangle" . PHP_EOL;
    echo " 4. Quit\n" . PHP_EOL;

    $input = (int) readline ("Enter your choice (1-4): ");

    if ($input !== 1 && $input !== 2 && $input !== 3 && $input !== 4) {
        echo "Invalid choice, please try again!" . PHP_EOL;
        break;
    } else {

        switch ($input) {
            case 1:
                $radius = readline ("Enter radius: ");
                echo "Area is: " . circleArea($radius) . PHP_EOL;
                break;
            case 2:
                $lenght = readline ("Enter length: ");
                $width = readline ("Enter width: ");
                echo "Area is: " . RectangleArea($lenght, $width) . PHP_EOL;
                break;
            case 3:
                $base = readline ("Enter base: ");
                $height = readline ("Enter height: ");
                echo "Area is: " . TriangleArea($base, $height) . PHP_EOL;
                break;
        }
    }



} while ($input !== 4 && $input !== 3 && $input !== 2 && $input !== 1);
?>