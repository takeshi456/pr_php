<?php

namespace prphp\lesson2;


class Factory
{

    public static function create($operator)
    {
        return match ($operator) {
            '+' => new Sum(),
            '-' => new Minus(),
            'm' => new Multiple(),
            '/' => new Divide()
        };
    }
}