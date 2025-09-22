<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class RoomList
{
    public string|null $markerRoomstayQuery = null;

    public RoomRateDetails $roomRateDetails;

    public function __construct(Room $room)
    {
        $this->roomRateDetails = new RoomRateDetails($room);
    }
}