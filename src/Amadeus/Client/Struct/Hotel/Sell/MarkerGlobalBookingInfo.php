<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class MarkerGlobalBookingInfo
{
    public HotelReference $hotelReference;

    public function __construct(Room $room)
    {
        $this->hotelReference = new HotelReference($room);
    }
}