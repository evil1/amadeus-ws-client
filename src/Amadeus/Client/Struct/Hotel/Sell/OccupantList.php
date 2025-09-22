<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Guest;

class OccupantList
{
    public PassengerReference $passengerReference;

    public Age $age;

    public function __construct(Guest $guest, bool $guestList = false)
    {
        $this->passengerReference = new PassengerReference($guest, $guestList);
    }
}