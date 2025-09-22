<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

class PaymentInfo
{
    public PaymentDetails $paymentDetails;

    public function __construct(\Amadeus\Client\RequestOptions\Hotel\Sell\PaymentDetails $paymentDetails)
    {
        $this->paymentDetails = new PaymentDetails($paymentDetails);
    }
}