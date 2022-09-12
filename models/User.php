<?php

class User
{
    private $first_name;
    private $last_name;
    private $email;
    private $date_of_birth;
    private $billing_address;
    private $shipping_address;

    public function __construct($first_name, $last_name, $email, $date_of_birth, $billing_address, $shipping_address)
    {
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setEmail($email);
        $this->setDateOfBirth($date_of_birth);
        $this->setBillingAddress($billing_address);
        $this->setShippingAddress($shipping_address);
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
     * Get the value of date_of_birth
     */ 
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * Set the value of date_of_birth
     *
     * @return  self
     */ 
    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;

        return $this;
    }

    /**
     * Get the value of billing_address
     */ 
    public function getBillingAddress()
    {
        return $this->billing_address;
    }

    /**
     * Set the value of billing_address
     *
     * @return  self
     */ 
    public function setBillingAddress($billing_address)
    {
        $this->billing_address = $billing_address;

        return $this;
    }

    /**
     * Get the value of shipping_address
     */ 
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    /**
     * Set the value of shipping_address
     *
     * @return  self
     */ 
    public function setShippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;

        return $this;
    }
}