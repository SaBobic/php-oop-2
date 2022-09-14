<?php

class Order
{
    private $address;
    private $payment_method;
    private $amount;
    private $products;
    private $status;

    public function __construct($address, $payment_method, $amount, $products, $status = 'Pending')
    {
        $this->setAddress($address);
        $this->setPaymentMethod($payment_method);
        $this->setAmount($amount);
        $this->setProducts($products);
        $this->setStatus($status);
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
     * Get the value of payment_method
     */ 
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * Set the value of payment_method
     *
     * @return  self
     */ 
    public function setPaymentMethod($payment_method)
    {
        $this->payment_method = $payment_method;

        return $this;
    }

    /**
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */ 
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of products
     */ 
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @return  self
     */ 
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function performPayment()
    {
        if($this->payment_method->getBalance() >= $this->amount && $this->payment_method->isValid()){
            $this->payment_method->setBalance($this->payment_method->getBalance() - $this->amount);
            echo 'Ordine riuscito';
        } else {
            echo 'Errore: ordine non riuscito';
        }
    }
}

?>