<?php

namespace prphp\lesson3;

class Recipe
{
    private string $food;
    private int $calorie;

    /**
     * @param string $food
     * @param int $calorie
     */
    public function __construct(string $food, int $calorie)
    {
        $this->food = $food;
        $this->calorie = $calorie;
    }


    public function getName(): string
    {
        return $this->food;
    }

    public function getCal(): float
    {
        return $this->calorie;
    }
}