<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class GlobalBookingInfo
{
    public MarkerGlobalBookingInfo $markerGlobalBookingInfo;

    public BookingSource $bookingSource;

    public function __construct(Room $room)
    {
        $this->markerGlobalBookingInfo = new MarkerGlobalBookingInfo($room);
        $this->bookingSource = new BookingSource($room);
    }
}