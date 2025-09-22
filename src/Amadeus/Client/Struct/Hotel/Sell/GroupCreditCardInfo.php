<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

class GroupCreditCardInfo
{
    public CreditCardInfo $creditCardInfo;

    public function __construct(\Amadeus\Client\RequestOptions\Hotel\Sell\CreditCardInfo $card)
    {
        $this->creditCardInfo = new CreditCardInfo($card);
    }
}