<?php


class CreditCard
{
    private $number;
    private $card_holder;
    private $date_expiration;
    private $ccv;
    private $expired;


    public function __construct($number,$card_holder,$date_expiration,$ccv,$expired = true)
    {
        $this->number = $number;
        $this->card_holder = $card_holder;
        $this->date_expiration = $date_expiration;
        $this->ccv = $ccv;
        $this->expired = $this->isExpired($date_expiration);
    }

    private function isExpired($date_expiration)
    {
        if($date_expiration < date('d/m/Y')) return true;

        return false;
    }

    public function getExpired()
    {
        return $this->expired;
    }

    public function setCardHolder($card_holder)
    {
        $this->card_holder = $card_holder;
    }

}