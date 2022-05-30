<?php

namespace prphp\lesson2;

class Sum implements Calculation
{
    public function calc(int $x, int $y): int
    {
        return $x + $y;
    }
}