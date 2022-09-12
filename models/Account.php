<?php

require_once __DIR__ . '/User.php';

class Account extends User
{
    protected $username;
    protected $password;
    protected $discount;
    protected $payment_methods;
    
    public function __construct($first_name, $last_name, $email, $date_of_birth, $billing_address, $shipping_address, $username, $password, $payment_methods)
    {
        parent::__construct($first_name, $last_name, $email, $date_of_birth, $billing_address, $shipping_address);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setDiscount();
        $this->setPaymentMethods($payment_methods);
    }


    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

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
    public function setDiscount()
    {
        $this->discount = 20;

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
        $this->payment_methods = [];
        $this->payment_methods[] = $payment_methods;

        return $this;
    }
}