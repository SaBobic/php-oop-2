<?php

class Product
{
    protected $name;
    protected $brand;
    protected $description;
    protected $price;
    protected $discount;
    protected $ratings;
    protected $target_species;
    protected $supply;

    public function __construct($name, $brand, $description, $price, $discount, $ratings, $target_species, $supply)
    {
        $this->setName($name);
        $this->setBrand($brand);
        $this->setDescription($description);
        $this->setPrice($price);
        $this->setDiscount($discount);
        $this->setRatings($ratings);
        $this->setTargetSpecies($target_species);
        $this->setSupply($supply);
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
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

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
     * Get the value of discount
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */ 
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get the value of ratings
     */ 
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * Set the value of ratings
     *
     * @return  self
     */ 
    public function setRatings($ratings)
    {
        $this->ratings = $ratings;

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

    /**
     * Get the value of supply
     */ 
    public function getSupply()
    {
        return $this->supply;
    }

    /**
     * Set the value of supply
     *
     * @return  self
     */ 
    public function setSupply($supply)
    {
        $this->supply = $supply;

        return $this;
    }
}