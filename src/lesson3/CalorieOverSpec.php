<?php

namespace prphp\lesson3;


class CalorieOverSpec implements Menuspec
{

    /**
     * @var float
     */
    private float $calorie;

    /**
     * @param float $calorie
     */
    public function __construct(float $calorie)
    {
        $this->calorie = $calorie;
    }

    /**
     * @param Menu $menu
     * @return bool
     */
    public function satisfiedBy(Menu $menu): bool
    {
        return $menu->getCal() >= $this->calorie;
    }
}