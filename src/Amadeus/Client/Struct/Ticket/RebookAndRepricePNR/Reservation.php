<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

use Amadeus\Client\Struct\WsMessageUtility;

class Reservation extends WsMessageUtility
{
    public string $bookingIdentifier;

    public function __construct(string $locator)
    {
        $this->bookingIdentifier = $locator;
    }
}