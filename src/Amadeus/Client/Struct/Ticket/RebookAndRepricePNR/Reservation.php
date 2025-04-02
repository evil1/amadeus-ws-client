<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

use Amadeus\Client\Struct\WsMessageUtility;

class Reservation
{
    public string $bookingIdentifier;

    public function __construct(string $locator = null)
    {
        if (!is_null($locator)) {
            $this->bookingIdentifier = $locator;
        }
    }
}