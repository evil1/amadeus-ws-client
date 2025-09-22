<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Guest;

class RepresentativeParties
{
    public OccupantList $occupantList;

    public function __construct(Guest $guest)
    {
        $this->occupantList = new OccupantList($guest);
    }
}