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

//    public static function pairs(array $argArray): array
//    {
//        $array = [];
//        for ($i = 0; $i < count($argArray) - 1; $i++) {
//            $array[] = new Pair($argArray[$i], $argArray[$i + 1]);
//        }
//        return $array;
//    }

    public static function pairs(array $argArray): array
    {
        return array_map(
            fn(int $i) => new Pair($argArray[$i], $argArray[$i + 1]), range(0, count($argArray) - 1)
        );
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

    /*
    * @param int $int
    * @param array $intArray
    * @return array
    */
    public static function positions(int $int, array $intArray): array
    {
        // (インデックス, 配列の値)

        // (配列の値、引数値)

        //        $replicate = self::replicate(count($intArray), $int);
        //        $zip = self::zip($intArray, $replicate);
        //        $positions = array_filter($zip, fn($zip) => $zip->first === $zip->second);
        //        return array_keys($positions);

        $range = range(0, count($intArray) - 1);

        $pairs = self::zip($range, $intArray);

        //intArray = [1, 3, 5, 1]
        //paris => [(0,1), (1,3), (2,5), (3,1)]
        //$int => 1

        $filtered = array_filter($pairs, fn(Pair $pair) => $pair->second() === $int);

        //filtered => [(0,1), (3,1)]

        return array_map(fn(Pair $pair) => $pair->first(), $filtered);

        // [0, 3]
    }

}