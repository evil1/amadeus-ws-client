<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class GuestList
{

    /**
     * @var OccupantList[]
     */
    public array $occupantList;

    public function __construct(Room $room)
    {
        foreach ($room->guests as $guest) {
            $this->occupantList[] = new OccupantList($guest);
        }
    }
}