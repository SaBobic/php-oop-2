<?php

require_once __DIR__ . 'Product.php';

class Collars extends Product
{
    protected $color;
    protected $materials;
    protected $closure_type;

    public function __construct($name, $brand, $price, $target_species, $color, $materials, $closure_type)
    {
        parent::__construct($name, $brand, $price, $target_species);
        $this->setColor($color);
        $this->setMaterials($materials);
        $this->setClosureType($closure_type);
    }

    

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

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

    /**
     * Get the value of closure_type
     */ 
    public function getClosureType()
    {
        return $this->closure_type;
    }

    /**
     * Set the value of closure_type
     *
     * @return  self
     */ 
    public function setClosureType($closure_type)
    {
        $this->closure_type = $closure_type;

        return $this;
    }
}