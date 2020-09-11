<?php declare(strict_types=1);

// Foo Corporation needs a program to calculate how much to pay their hourly employees.
// The US Department of Labor requires that employees get paid time and a half for any hours over 40 that they work in a single week.
// For example, if an employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay.
// The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour.
// Foo Corp requires that an employee not work more than 60 hours in a week.


function calculateSalary($hours, $basePay) {
    if ($basePay < 8.00) {
        echo "Can't be payed less than 8.00 dollars an hour" . PHP_EOL;
        return;
    }

    if ($hours > 60) {
        echo "You can't work more than 60 hours in a week" . PHP_EOL;
    return;
    }

    if ($hours < 40) {
        $salary = $hours * $basePay;

    } else {
        $salary = 40 * $basePay + (($hours - 40) * (1.5));

    }

    echo "With $hours work hours and $$basePay, the salary is: $$salary" . PHP_EOL;
}

calculateSalary(35, 7.50);
calculateSalary(47, 8.20);
calculateSalary(73, 10);


?>