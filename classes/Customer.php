<?php

require_once 'CreditCard.php';

class Customer
{
    private $first_name;
    private $last_name;
    private $credit_card;
    private $registered;
    private $payment_enabled

    public function __costruct($first_name,$last_name,$credit_card,$registered = false,$payment_enabled = false)
    {
        $this->$first_name = $first_name;
        $this->$last_name = $last_name;
        $this->$credit_card = getCreditCard($credit_card);
        $this->$registered = $registered
        $this->$payment_enabled = isPayEnabled(getCreditCard($credit_card));
    }

    private function getCreditCard($card)
    {
        if(!$card instanceof CreditCard) return false;

        return $card;
    }

    public function getNameComplete()
    {
        return $this->$first_name . ' ' . $this->$last_name;
    }

    private function isPayEnabled($card)
    {
        if(!$card || $card->getExpired()) return false;

        return true;


    }

}