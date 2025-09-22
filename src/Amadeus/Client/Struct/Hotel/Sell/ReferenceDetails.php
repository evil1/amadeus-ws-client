<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class ReferenceDetails
{
    const TYPE_BOOKING_CODE = 'BC';

    public string $type = self::TYPE_BOOKING_CODE;

    public string $value;

    public function __construct(Room $room)
    {
        $this->value = $room->bookingCode;
    }
}