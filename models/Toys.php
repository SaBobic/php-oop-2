<?php

require_once __DIR__ . 'Product.php';

class Toys extends Product
{
    protected $type;
    protected $breed_size;
    protected $theme;
    protected $materials;

    public function __construct($name, $brand, $description, $price, $discount, $ratings, $target_species, $supply, $type, $breed_size, $theme, $materials)
    {
        parent::__construct($name, $brand, $description, $price, $discount, $ratings, $target_species, $supply);
        $this->setType($type);
        $this->setBreedSize($breed_size);
        $this->setTheme($theme);
        $this->setMaterials($materials);
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

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

    /**
     * Get the value of theme
     */ 
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set the value of theme
     *
     * @return  self
     */ 
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get the value of materials
     */ 
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set the value of materials
     *
     * @return  self
     */ 
    public function setMaterials($materials)
    {
        $this->materials = $materials;

        return $this;
    }
}