<?php

namespace prphp\lesson3;
use prphp\lesson3\Menuspec;

class MenuTypeSpec implements Menuspec
{

    private string $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function satisfiedBy(Menu $menu):bool
    {
        return $menu->getType() === $this->type;
    }
}