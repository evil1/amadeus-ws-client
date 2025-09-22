<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Guest;

class GuestList
{
    public OccupantList $occupantList;

    public Age $age;

    public function __construct(Guest $guest)
    {
        if ($guest->type === 'ADT') {
            $this->occupantList = new OccupantList($guest);
        } else {
            $this->age = new Age($guest->age);
        }
    }
}