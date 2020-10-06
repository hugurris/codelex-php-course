<?php declare(strict_types=1);

class ProductFormatter
{
    public static function name($name)
    {
        return '<' . $name . '> ' . '::';
    }
}