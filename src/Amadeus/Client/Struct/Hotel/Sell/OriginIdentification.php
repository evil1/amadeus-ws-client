<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class OriginIdentification
{

    public string $originatorId;

    public function __construct(Room $room)
    {
        $this->originatorId = $room->agencyIata;
    }
}