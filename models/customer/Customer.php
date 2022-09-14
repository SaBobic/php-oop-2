<?php

require_once __DIR__ . '/../shopping/Cart.php';
require_once __DIR__ . '/../shopping/Order.php';

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

    public function placeOrder($address, $payment_method)
    {
        $amount = $this->cart->getTotal();
        $products = $this->cart->getProductsList();
        $order = new Order($address, $payment_method, $amount, $products);
        $order->performPayment();
    }
}