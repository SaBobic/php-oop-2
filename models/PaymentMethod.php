<?php

class PaymentMethod
{
    private $balance;
    private $expiration_date;

    public function __construct($balance, $expiration_date)
    {
        $this->setBalance($balance);
        $this->setExpirationDate($expiration_date);
    }

    /**
     * Get the value of balance
     */ 
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */ 
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * Get the value of expiration_date
     */ 
    public function getExpirationDate()
    {
        return $this->expiration_date;
    }

    /**
     * Set the value of expiration_date
     *
     * @return  self
     */ 
    public function setExpirationDate($expiration_date)
    {
        $this->expiration_date = $expiration_date;

        return $this;
    }

    public function withdrawal($amount)
    {
        if($amount > $this->balance) return false;
        return $this->balance -= $amount; 
    }
}