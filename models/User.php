<?php

class User
{
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $date_of_birth;
    protected $billing_address;
    protected $shipping_address;

    public function __construct($first_name, $last_name, $email, $date_of_birth, $billing_address, $shipping_address)
    {
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setEmail($email);
        $this->setDateOfBirth($date_of_birth);
        $this->setBillingAddress($billing_address);
        $this->setShippingAddress($shipping_address);
    }

    public function buyProduct($payment_method, $item)
    {
        $today = date("m/Y");
        $month = 'Settembre';
        if ($payment_method->getBalance() < $item->getPrice()) return false;
        if ($payment_method->getExpirationDate() > $today) return false;
        if($item->getAvailabilityMonths()){
            if(!in_array($month, $item->getAvailabilityMonths())){
                echo 'Prodotto non disponibile in questa mensilità';
                return false;
            }
        }

        $payment_method->withdrawal($item->getPrice());
        $item->setSupply($item->getSupply() - 1);
        return true;
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