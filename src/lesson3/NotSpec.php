<?php

namespace prphp\lesson3;

class NotSpec implements MenuSpec
{
    //名前は何が最適か
    /**
     * @var MenuSpec
     */
    private MenuSpec $menuSpec;
    /**


    /**
     * @param  MenuSpec $menuSpec
     */
    public function __construct(MenuSpec $menuSpec)
    {
        $this->menuSpec = $menuSpec;
    }

    /**
     * @param Menu $menu
     * @return bool
     */
    public function satisfiedBy(Menu $menu): bool
    {
        return !$this->menuSpec->satisfiedBy($menu);
    }
}