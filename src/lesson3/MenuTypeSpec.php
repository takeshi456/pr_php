<?php

namespace prphp\lesson3;

class MenuTypeSpec implements Menuspec
{

    /**
     * @var string
     */
    private string $type;


    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @param Menu $menu
     * @return bool
     */
    public function satisfiedBy(Menu $menu):bool
    {
        return $menu->getType() === $this->type;
    }
}