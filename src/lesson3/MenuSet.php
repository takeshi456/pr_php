<?php

namespace prphp\lesson3;

class MenuSet
{
    private array $menuSet;

    /**
     * @param array $menuSet
     */
    public function __construct(array $menuSet)
    {
        $this->menuSet = $menuSet;
    }

    /**
     * @return array
     */
    public function getMenus(): array
    {
        return $this->menuSet;
    }


    /**
     * @param string $menuType
     * @return array
     */
    public function getMenusByType(string $menuType): array
    {
        return array_filter($this->menuSet, fn($menu) => $menu->getType() === $menuType);
    }

    /**
     * @param float $calorie
     * @return array
     */
    public function getMenusByCalorie(float $calorie): array
    {
        return array_filter($this->menuSet,fn($menu) => $menu->getCal() >= $calorie);
    }



}