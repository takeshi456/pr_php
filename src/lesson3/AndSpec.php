<?php

namespace prphp\lesson3;

class AndSpec implements MenuSpec
{
    //名前は何が最適か
    /**
     * @var menuSpec
     */
    private menuSpec $menuSpec1;
    /**
     * @var menuSpec
     */
    private menuSpec $menuSpec2;


    /**
     * @param menuSpec $menuSpec1
     * @param menuSpec $menuSpec2
     */
    public function __construct(menuSpec $menuSpec1, menuSpec $menuSpec2)
    {
        $this->menuSpec1 = $menuSpec1;
        $this->menuSpec2 = $menuSpec2;
    }

    /**
     * @param Menu $menu
     * @return bool
     */
    public function satisfiedBy(Menu $menu): bool
    {
        return $this->menuSpec1->satisfiedBy($menu) && $this->menuSpec2->satisfiedBy($menu);
    }
}