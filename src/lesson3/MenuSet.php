<?php

namespace prphp\lesson3;

/**
 *
 */
class MenuSet
{

    /**
     * @var MenuSet[]
     */
    private array $menuSet;

    /**
     * @param $menuSet[] $menuSet
     */
    public function __construct(array $menuSet)
    {
        $this->menuSet = $menuSet;
    }

    /**
     * @return menuSet[]
     */
    public function getMenus(): array
    {
        return $this->menuSet;
    }

    /**
     * @param string $menuType
     * @return MenuSet[]
     */
    public function getMenusByType(string $menuType): array
    {
        return array_filter($this->menuSet, fn(Menu $menu) => $menu->getType() === $menuType);
    }

    /**
     * @param float $calorie
     * @return MenuSet[]
     */
    public function getMenusByCalorie(float $calorie): array
    {
        return $this->getMenusBySpec(fn(Menu $menu) => $menu->getCal() >= $calorie);
    }


    /**
     * @param callable $spec
     * @return menuSet[]
     */
    public function getMenusBySpec(callable $spec): array
    {
        return array_filter($this->menuSet,fn($menu) => $spec($menu) === true);
    }

    public function getMenusBySpecInterface(): array
    {
        return array_filter($this->menuSet,fn($menu) => $menuSpec->satisfiedBy($menu));
    }
}