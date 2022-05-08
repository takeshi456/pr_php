<?php

namespace prphp\lesson1;

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

    public static function zip(array $array1,array $array2): array
    {
        $array = [];
        for($i = 0; $i < ArrayUtil::culcLoopNum($array1,$array2); $i++) {
            $array[] = '('.$array1[$i].','.$array2[$i].')';
        }
        return $array;

    }

    public static function culcLoopNum(array $array1,array $array2):int
    {
        if(count($array1) >= count($array2)) {
            return count($array2);
        }
        return count($array1);
    }

}