<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class HotelReference
{
    public string $chainCode;

    public string $cityCode;

    public string $hotelCode;

    public function __construct(Room $room)
    {
        $this->chainCode = $room->chainCode;
        $this->cityCode = $room->cityCode;
        $this->hotelCode = $room->hotelCode;
    }
}