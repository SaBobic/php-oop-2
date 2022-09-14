<?php

require_once __DIR__ . '/../shopping/Cart.php';

class Customer
{
    protected $cart;

    public function __construct()
    {
        $this->setCart();
    }

    /**
     * Get the value of cart
     */ 
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set the value of cart
     *
     * @return  self
     */ 
    public function setCart()
    {
        $this->cart = new Cart();
    }

    public function addToCart($item)
    {
        $this->cart->addProduct($item);
    }

    public function removeFromCart($item)
    {
        $this->cart->removeProduct($item);
    }
}