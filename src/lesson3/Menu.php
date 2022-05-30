<?php

namespace prphp\lesson3;

class Menu
{
    private string $menuName;
    private string $menuType;
    private array $recipeData;

    /**
     * @param string $menuName
     * @param string $menuType
     * @param array $recipeData
     */
    public function __construct(string $menuName, string $menuType, array $recipeData)
    {
        $this->menuName = $menuName;
        $this->menuType = $menuType;
        $this->recipeData = $recipeData;
    }


    public function getName(): string
    {
        return $this->menuName;
    }

    public function getType(): string
    {
        return $this->menuType;
    }

    public function getRecipes(): array
    {
        return $this->recipeData;
    }

    public function getCal(): float
    {
        //まだわかっていない
        //return array_reduce($this->recipeData, fn($recipe1, $recipe2) => $recipe1->getCal() + $recipe2->getCal());
        $array = [];
        foreach ($this->recipeData as $recipe)
        {
            $array[] = $recipe->getCal();
        }
        return array_sum($array);

    }

}