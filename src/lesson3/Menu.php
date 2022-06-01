<?php

namespace prphp\lesson3;

class Menu
{
    /**
     * @var string
     */
    private string $menuName;
    /**
     * @var string
     */
    private string $menuType;
    /**
     * @var array
     */
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


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->menuName;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->menuType;
    }

    /**
     * @return array
     */
    public function getRecipes(): array
    {
        return $this->recipeData;
    }

    /**
     * @return float
     */
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