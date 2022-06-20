<?php

namespace prphp\lesson3;

class Menu
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $type;
    /**
     * @var array
     */
    private array $recipes;

    /**
     * @param string $name
     * @param string $type
     * @param array $recipes
     */
    public function __construct(string $name, string $type, array $recipes)
    {
        $this->name = $name;
        $this->type = $type;
        $this->recipes = $recipes;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function getRecipes(): array
    {
        return $this->recipes;
    }

    /**
     * @return float
     */
    public function getCal(): float
    {
        $array = [];
        foreach ($this->recipes as $recipe)
        {
            $array[] = $recipe->getCal();
        }
        return array_sum($array);

    }

}