<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Guest;

class OccupantList
{
    public PassengerReference $passengerReference;

    public Age $age;

    public function __construct(Guest $guest, bool $guestList = false)
    {
        if ($guest->type === 'ADT') {
            $this->passengerReference = new PassengerReference($guest, $guestList);
        } else {
            $this->age = new Age($guest->age);
        }
    }
}