<?php declare(strict_types=1);

class PriceFormatter
{
    public static function price(int $price): string
    {
        return '€' . number_format($price / 100, 2);
    }

}