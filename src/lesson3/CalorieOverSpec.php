<?php

namespace prphp\lesson3;

class CalorieOverSpec implements Menuspec
{

    private float $calorie;

    public function __construct($calorie)
    {
        $this->calorie = $calorie;
    }

    public function satisfiedBy(Menu $menu): bool
    {
        return $menu->getCal() >= $this->calorie;
    }
}