<?php

class Product
{
    protected $name;
    protected $brand;
    protected $price;
    protected $target_species;

    public function __construct($name, $brand, $price, $target_species)
    {
        $this->setName($name);
        $this->setBrand($brand);
        $this->setPrice($price);
        $this->setTargetSpecies($target_species);
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of target_species
     */ 
    public function getTargetSpecies()
    {
        return $this->target_species;
    }

    /**
     * Set the value of target_species
     *
     * @return  self
     */ 
    public function setTargetSpecies($target_species)
    {
        $this->target_species = $target_species;

        return $this;
    }
}