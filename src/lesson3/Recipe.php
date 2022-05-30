<?php

namespace prphp\lesson3;

class Recipe
{
    private string $food;
    private int $calorie;

    public function __construct($food,$calorie)
    {
        $this->food = $food;
        $this->calorie = $calorie;
    }

    public function getName()
    {
        return $this->food;
    }

    public function getCal()
    {
        return $this->calorie;
    }
}