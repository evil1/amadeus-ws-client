<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class RoomStayData
{
    public string|null $markerRoomStayData = null;

    public function __construct(Room $room)
    {

    }
}