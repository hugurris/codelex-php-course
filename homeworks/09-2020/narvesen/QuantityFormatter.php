<?php declare(strict_types=1);

class QuantityFormatter
{
    public static function quantity($quantity): string
    {

        return 'Available pieces: [' . $quantity . '] ' . '::' ;
    }

}