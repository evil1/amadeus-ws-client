<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

class CCInfo
{
    public string $vendorCode;

    public string $cardNumber;

    public string $securityId;

    public string $expiryDate;

    public string $surname;

    public string $firstName;

    public function __construct(\Amadeus\Client\RequestOptions\Hotel\Sell\CreditCardInfo $card)
    {
        $this->vendorCode = $card->type;
        $this->cardNumber = $card->number;
        $this->securityId = $card->cvv;
        $this->expiryDate = $card->expiryDate;
        $this->firstName = $card->holderFirstName;
        $this->surname = $card->holderLastName;
    }
}