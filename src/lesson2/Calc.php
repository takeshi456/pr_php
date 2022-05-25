<?php

namespace prphp\lesson2;

class Calc implements Calculation
{
    private string $ope;

    public function __construct(string $ope)
    {
        $this->ope = $ope;
    }


    public function calc(int $x, int $y): int
    {
        switch ($this->ope) {
            case "+":
                return $x + $y;
            case "-":
                return $x - $y;
            case "m":
                return $x * $y;
            case "/":
                return $x / $y;
            case "%":
                return $x % $y;
        }
    }
}