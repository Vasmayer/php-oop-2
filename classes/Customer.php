<?php

require_once 'CreditCard.php';
require_once 'Product.php';

class Customer
{
    private $first_name;
    private $last_name;
    private $credit_card;
    private $registered;
    private $payment_enabled;
    private $cart;
    private $discount;

    public function __construct($first_name,$last_name,$registered,$credit_card = false,$payment_enabled = false)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->credit_card = $this->getCreditCard($credit_card);
        $this->registered = $registered;
        $this->payment_enabled = $this->isPayEnabled($this->getCreditCard($credit_card));
        $this->discount = $this->getDiscount();
    }

    private function getCreditCard($card)
    {
        if(!$card instanceof CreditCard) return false;

        return $card;
    }

    public function getNameComplete()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    private function getDiscount()
    {
        if($this->registered)
        {
            return 20;
        }

        return 0;
    }
    public function setCreditCard($card)
    {
        if(!$card instanceof CreditCard) return false;
        $this->credit_card = $card;
        $this->payment_enabled = !$this->credit_card->getExpired();
    }
    private function isPayEnabled($card)
    {
        if(!$card || !$card->getExpired()) return false;

        return true;
    }

    public function addProducts($product)
    {
        if($product instanceof Product && $this->payment_enabled)
        {
            $this->cart[] = $product;
            return true;
        }
        
        return false;
    }

}