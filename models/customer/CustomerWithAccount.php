<?php

require_once __DIR__ . '/Customer.php';

class CustomerWithAccount extends Customer
{
    private $first_name;
    private $last_name;
    private $email;
    private $address;
    private $payment_methods;
    private $discount;

    public function __construct($first_name, $last_name, $email, $address, $payment_methods)
    {
        parent::__construct();
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setEmail($email);
        $this->setAddress($address);
        $this->setPaymentMethods($payment_methods);
        $this->setDiscount();
    }

    /**
     * Get the value of first_name
     */ 
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of payment_methods
     */ 
    public function getPaymentMethods()
    {
        return $this->payment_methods;
    }

    /**
     * Set the value of payment_methods
     *
     * @return  self
     */ 
    public function setPaymentMethods($payment_methods)
    {
        $this->payment_methods = $payment_methods;

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
    public function setDiscount($discount = 0.8)
    {
        $this->discount = $discount;

        return $this;
    }

    public function placeOrder($address = null, $payment_method = null)
    {
        if(!$address) $address = $this->address;
        if(!$payment_method) $payment_method = $this->payment_methods;
        $amount = $this->cart->getTotal() * $this->discount;
        $products = $this->cart->getProductsList();
        $order = new Order($address, $payment_method, $amount, $products);
        $order->performPayment();
    }
}