<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class HotelProductReference
{
    public ReferenceDetails $referenceDetails;

    public function __construct(Room $room)
    {
        $this->referenceDetails = new ReferenceDetails($room);
    }
}