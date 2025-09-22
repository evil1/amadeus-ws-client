<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

class Age
{
    public QuantityDetails $quantityDetails;
    public function __construct(int $age)
    {
        $this->quantityDetails = new QuantityDetails('AGE', $age);
    }
}