<?php

namespace prphp\lesson3;

class OrSpec implements MenuSpec
{
//    private
    private $object1;
    private $object2;

    //名前は何が最適か
    public function __construct($object1,$object2)
    {
        $this->object1 = $object1;
        $this->object2 = $object2;
    }

    public function satisfiedBy(Menu $menu): bool
    {
        return $this->object1->satisfiedBy($menu) || $this->object2->satisfiedBy($menu) === true;
    }
}