<?php

namespace Amadeus\Client\Struct\Hotel\Sell;



class GuaranteeOrDeposit
{
    public PaymentInfo $paymentInfo;

    public GroupCreditCardInfo $groupCreditCardInfo;

    public function __construct(\Amadeus\Client\RequestOptions\Hotel\Sell\PaymentDetails $paymentDetails)
    {
        $this->paymentInfo = new PaymentInfo($paymentDetails);
        if (\Amadeus\Client\RequestOptions\Hotel\Sell\PaymentDetails::FOP_CREDIT_CARD === $this->paymentInfo->paymentDetails->formOfPaymentCode) {
            $this->groupCreditCardInfo = new GroupCreditCardInfo($paymentDetails->cardInfo);
        }
    }
}