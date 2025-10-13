<?php

namespace Amadeus\Client\Struct\Ticket\InitRefund;

class StockProvider
{
    public string|null $StockTypeCode = null;

    public string|null $StockProviderCode = null;

    public function __construct(string $type, string $provider)
    {
        $this->StockTypeCode = $type;
        $this->StockProviderCode = $provider;
    }
}