<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class Reservation
{
    public string $BookingIdentifier;

    public function __construct(string $locator = null)
    {
        if (!is_null($locator)) {
            $this->BookingIdentifier = $locator;
        }
    }
}