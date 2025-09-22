<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class RoomRateDetails
{
    public string|null $marker = null;

    public HotelProductReference $hotelProductReference;

    public function __construct(Room $room)
    {
        $this->hotelProductReference = new HotelProductReference($room);
    }
}