<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class GuestList
{

    /**
     * @var OccupantList
     */
    public OccupantList $occupantList;

    public function __construct(Room $room)
    {
        foreach ($room->guests as $guest) {
            if ($guest->type === 'ADT') {
                $this->occupantList = new OccupantList($guest);
            } else {
                $this->age = new Age($guest->age);
            }
        }
    }
}