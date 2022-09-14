<?php

class CreditCard
{
    private $number;
    private $expiration_date;
    private $balance;

    public function __construct($number, $balance, $expiration_date)
    {
        $this->setNumber($number);
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

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    public function isValid()
    {
        $today = strtotime(date("d-m-Y"));
        $expiration = strtotime($this->expiration_date);
        return $today < $expiration;
    }
}