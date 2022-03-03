<?php


class CreditCard
{
    private $number;
    private $card_holder;
    private $date_expiration;
    private $ccv;
    private $expired;


    public function __costruct($number,$card_holder,$date_expiration,$ccv,$expired = true;)
    {
        $this->$number = $number;
        $this->$card_holder = $card_holder;
        $this->$date_expiration = $date_expiration;
        $this->$ccv = $ccv;
        $this->$expired = isExpired($date_expiration);
    }

    private function isExpired($date_expiration)
    {
        if($date_expiration < new DateTime()) return true;

        return false;
    }

    public function getExpired()
    {
        return $this->$expired;
    }

}