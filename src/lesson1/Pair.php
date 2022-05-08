<?php

namespace prphp\lesson1;

class Pair
{
    private $val1;
    private $val2;

    public function __construct($val1, $val2)
    {
        $this->val1 = $val1;
        $this->val2 = $val2;
    }

    /**
     * @return mixed
     */
    public function first()
    {
        return $this->val1;
    }

    /**
     * @return mixed
     */
    public function second()
    {
        return $this->val2;
    }

    public function __toString()
    {
        return '('.$this->val1.','.$this->val2.')';
    }
}