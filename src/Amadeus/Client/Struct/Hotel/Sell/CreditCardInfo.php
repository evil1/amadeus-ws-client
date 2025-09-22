<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

class CreditCardInfo
{
    public CCInfo $ccInfo;
    public function __construct(\Amadeus\Client\RequestOptions\Hotel\Sell\CreditCardInfo $card)
    {
        $this->ccInfo = new CCInfo($card);
    }
}