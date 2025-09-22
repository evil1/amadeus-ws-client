<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Guest;

class OccupantList
{
    public PassengerReference $passengerReference;

    public function __construct(Guest $guest)
    {
        $this->passengerReference = new PassengerReference($guest);
    }
}