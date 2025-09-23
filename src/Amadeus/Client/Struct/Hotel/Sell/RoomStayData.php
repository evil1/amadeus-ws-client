<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class RoomStayData
{
    public string|null $markerRoomStayData = null;

    public GlobalBookingInfo $globalBookingInfo;

    public RoomList $roomList;

    public function __construct(
        Room $room,
        \Amadeus\Client\RequestOptions\Hotel\Sell\PaymentDetails $paymentDetails,
        array $remarks
    )
    {
        $this->globalBookingInfo = new GlobalBookingInfo($room);
        $this->roomList = new RoomList($room, $paymentDetails, $remarks);
    }
}