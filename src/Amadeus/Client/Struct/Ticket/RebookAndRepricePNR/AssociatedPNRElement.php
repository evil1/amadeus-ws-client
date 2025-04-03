<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class AssociatedPNRElement
{
    public string $Type = 'PT';

    public int $Tattoo;

    /**
     * @param int $passengerNumber Passenger tattoo
     */
    public function __construct(int $passengerNumber)
    {
        $this->Tattoo = $passengerNumber;
    }
}