<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredients
 *
 * @ORM\Table(name="ingredients")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IngredientsRepository")
 */
class Ingredients
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_ingredient", type="string", length=255)
     */
    private $name_ingredient;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameIngredient
     *
     * @param string $nameIngredient
     *
     * @return Ingredients
     */
    public function setNameIngredient($nameIngredient)
    {
        $this->name_ingredient = $nameIngredient;

        return $this;
    }

    /**
     * Get nameIngredient
     *
     * @return string
     */
    public function getNameIngredient()
    {
        return $this->name_ingredient;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Recipes", inversedBy="ingredients")
     * @ORM\JoinColumn(name="recipes_id", referencedColumnName="id")
     */
    protected $recipes;

    /**
     * Set recipes
     *
     * @param \AppBundle\Entity\Recipes $recipes
     *
     * @return Ingredients
     */
    public function setRecipes(\AppBundle\Entity\Recipes $recipes = null)
    {
        $this->recipes = $recipes;

        return $this;
    }

    /**
     * Get recipes
     *
     * @return \AppBundle\Entity\Recipes
     */
    public function getRecipes()
    {
        return $this->recipes;
    }
}
