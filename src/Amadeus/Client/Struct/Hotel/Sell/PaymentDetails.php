<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

class PaymentDetails
{
    public int $formOfPaymentCode;

    public int $paymentType;

    public int $serviceToPay;

    public function __construct(\Amadeus\Client\RequestOptions\Hotel\Sell\PaymentDetails $paymentDetails)
    {
        $this->formOfPaymentCode = $paymentDetails->fop;
        $this->paymentType = $paymentDetails->paymentType;
        $this->serviceToPay = $paymentDetails->serviceType;
    }
}