<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    protected $form;
    protected $ingredients;
    protected $availability_months;
    protected $life_stage;
    protected $breed_size;

    public function __construct($name, $brand, $description, $price, $discount, $ratings, $target_species, $supply, $form, $ingredients, $availability_months, $life_stage, $breed_size)
    {
        parent::__construct($name, $brand, $description, $price, $discount, $ratings, $target_species, $supply);
        $this->setForm($form);
        $this->setIngredients($ingredients);
        $this->setAvailabilityMonths($availability_months);
        $this->setLifeStage($life_stage);
        $this->setBreedSize($breed_size);
    }

    /**
     * Get the value of form
     */ 
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set the value of form
     *
     * @return  self
     */ 
    public function setForm($form)
    {
        $this->form = $form;

        return $this;
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of availability_months
     */ 
    public function getAvailabilityMonths()
    {
        return $this->availability_months;
    }

    /**
     * Set the value of availability_months
     *
     * @return  self
     */ 
    public function setAvailabilityMonths($availability_months)
    {
        $this->availability_months = $availability_months;

        return $this;
    }

    /**
     * Get the value of life_stage
     */ 
    public function getLifeStage()
    {
        return $this->life_stage;
    }

    /**
     * Set the value of life_stage
     *
     * @return  self
     */ 
    public function setLifeStage($life_stage)
    {
        $this->life_stage = $life_stage;

        return $this;
    }

    /**
     * Get the value of breed_size
     */ 
    public function getBreedSize()
    {
        return $this->breed_size;
    }

    /**
     * Set the value of breed_size
     *
     * @return  self
     */ 
    public function setBreedSize($breed_size)
    {
        $this->breed_size = $breed_size;

        return $this;
    }
}