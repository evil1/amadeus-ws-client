<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

class QuantityDetails
{
    public string $qualifier;

    public string|int $value;

    public function __construct(string $qualifier, string|int $value)
    {
        $this->qualifier = $qualifier;
        $this->value = $value;
    }
}