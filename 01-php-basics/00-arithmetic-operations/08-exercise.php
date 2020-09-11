<?php declare(strict_types=1);

function calculateBMI($weight, $height)
{
    $bmi = round(($weight / $height / $height) * 10000);

    if ($bmi >= 18.5 && $bmi <= 25) {
        echo "A sedentary person's weight is considered OPTIMAL with BMI $bmi score" . PHP_EOL;

    } elseif ($bmi < 18.5) {
        echo "A sedentary person's weight is considered underweight with BMI $bmi score" . PHP_EOL;

    } elseif ($bmi > 25) {
        echo "A sedentary person's weight is considered OVERWEIGHT with BMI $bmi score" . PHP_EOL;
    }


}

calculateBMI(82, 192);
calculateBMI(100, 197);

?>