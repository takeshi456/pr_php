<?php

namespace prphp\lesson3;

class Recipe
{
    /**
     * @var string
     */
    private string $food;
    /**
     * @var float|int
     */
    private float $calorie;

    /**
     * @param string $food
     * @param int $calorie
     */
    public function __construct(string $food, int $calorie)
    {
        $this->food = $food;
        $this->calorie = $calorie;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->food;
    }

    /**
     * @return float
     */
    public function getCal(): float
    {
        return $this->calorie;
    }
}