<?php

require_once __DIR__ . '/../product/Product.php';

class Cart
{
    private $products = [];

    public function addProduct($item)
    {
        if(!($item instanceof Product)) return false;
        $this->products[] = $item;
        return true;
    }
    
    public function removeProduct($item)
    {
        if($item instanceof Product){
            foreach($this->products as $index => $product){
                if($product->getName() === $item->getName()){
                    unset($this->products[$index]);
                    return true;
                }
            };
        }
        return false;
    }

    public function getTotal()
    {
        $total = null;
        foreach($this->products as $product){
            $total += $product->getPrice();
        }
        return $total;
    }

    /**
     * Get the value of products
     */ 
    public function getProductsList()
    {
        return $this->products;
    }
}

?>