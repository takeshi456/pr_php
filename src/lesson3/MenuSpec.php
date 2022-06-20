<?php

namespace prphp\lesson3;

interface MenuSpec
{
    /**
     * メニューがある条件を満たせばtrueを返す。
     * @param Menu $menu メニュー
     */
    public function satisfiedBy(Menu $menu): bool;
}