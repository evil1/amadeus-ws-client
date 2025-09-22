<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class BookingSource
{
    public OriginIdentification $originIdentification;

    public function __construct(Room $room)
    {
        $this->originIdentification = new OriginIdentification($room);
    }
}