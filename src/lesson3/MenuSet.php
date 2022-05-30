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

}