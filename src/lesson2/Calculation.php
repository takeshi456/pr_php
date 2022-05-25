<?php

namespace prphp\lesson2;

interface Calculation
{
    public function calc(int $x, int $y): int;
}
