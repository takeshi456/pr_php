<?php

namespace prphp\lesson1;

use prphp\lesson1\Pair;

class ArrayUtil
{
    public static function eventsOf(array $array): array
    {
        return array_filter($array, function ($val) {
            return $val % 2 === 0;
        });
    }

    public static function replicate(int $val1, string $string1): array
    {
        $array = [];
        for ($i = 0; $i < $val1; $i++) {
            $array[] = $string1;
        }
        return $array;
    }

    public static function zip(array $array1, array $array2): array
    {
        $num = min(count($array1), count($array2));
        $array = [];
        for ($i = 0; $i < $num; $i++) {
            $array[] = new Pair($array1[$i], $array2[$i]);
        }
        return $array;
    }

    public static function factors(int $arg): array
    {
        return array_filter(range(1, $arg), fn($num) => $arg % $num === 0);
    }

    public static function perfects(int $arg): array
    {
        return array_filter(range(1, $arg), fn($int) => array_sum(self::factors($int)) - $int === $int);
    }

    public static function pairs(array $argArray): array
    {
        $array = [];
        for ($i = 0; $i < count($argArray) - 1; $i++) {
            $array[] = new Pair($argArray[$i], $argArray[$i + 1]);
        }
        return $array;
    }

    public static function sorted(array $array): bool
    {
        foreach (self::pairs($array) as $pairs) {
            if ($pairs->first() >= $pairs->second()) {
                return false;
            }
        }
        return true;
    }

    public static function potisions()
    {

    }

}