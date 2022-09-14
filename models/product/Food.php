<?php

require_once __DIR__ . '/Product.php';

class Food extends Product
{
    protected $form;
    protected $ingredients;
    protected $availability_months;

    public function __construct($name, $brand, $price, $target_species, $form, $ingredients, $availability_months)
    {
        parent::__construct($name, $brand, $price, $target_species);
        $this->setForm($form);
        $this->setIngredients($ingredients);
        $this->setAvailabilityMonths($availability_months);
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
}