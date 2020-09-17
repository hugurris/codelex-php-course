<?php declare(strict_types=1);

Class FizzBuzz {

    public static function print(): void {

        $input = (int) readline ('Max value: ');

        for ($i = 1; $i <= $input; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo 'FizzBuzz ';
            } elseif ($i % 3 == 0) {
                echo 'Fizz ';
            } elseif ($i % 5 == 0) {
                echo 'Buzz ';
            } else {
                echo "$i ";
            }

            if ($i % 20 === 0) {
                echo "\n";
            }
        }
    }
}

FizzBuzz::print();

?>