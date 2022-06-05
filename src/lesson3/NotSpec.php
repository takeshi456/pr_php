<?php

namespace prphp\lesson3;

class NotSpec implements MenuSpec
{
    //名前は何が最適か
    /**
     * @var object
     */
    private object $object1;
    /**
     * @var object
     */
    private object $object2;


    /**
     * @param object $object1
     * @param object $object2
     */
    public function __construct(object $object1, object $object2)
    {
        $this->object1 = $object1;
        $this->object2 = $object2;
    }

    /**
     * @param Menu $menu
     * @return bool
     */
    public function satisfiedBy(Menu $menu): bool
    {
        return ($this->object1->satisfiedBy($menu) || $this->object2->satisfiedBy($menu)) === false;
    }
}