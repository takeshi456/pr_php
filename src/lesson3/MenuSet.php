<?php

namespace prphp\lesson3;

/**
 *
 */
class MenuSet
{

    /**
     * @var
     */
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
        return array_filter($this->menuSet, fn(Menu $menu) => $menu->getType() === $menuType);
    }

    /**
     * @param float $calorie
     * @return array
     */
    public function getMenusByCalorie(float $calorie): array
    {
        return array_filter($this->menuSet, fn($menu) => $menu->getCal() >= $calorie);
    }


    /**
     * @param callable $spec
     * @return array
     */
    public function getMenusBySpec(callable $spec): array
    {
        $filtered = [];
        foreach ($this->menuSet as $menu) {
            if ($spec($menu)) {
                $filtered[] = $menu;
            }
        }
        return $filtered;
    }

    public function getMenusBySpecInterface($instance): array
    {
        return array_filter($this->menuSet,fn($menu) => $instance->satisfiedBy($menu));
    }
}