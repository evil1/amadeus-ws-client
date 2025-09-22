<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class RoomList
{
    public string|null $markerRoomstayQuery = null;

    public RoomRateDetails $roomRateDetails;

    public GuaranteeOrDeposit $guaranteeOrDeposit;

    public GuestList $guestList;

    public function __construct(Room $room, \Amadeus\Client\RequestOptions\Hotel\Sell\PaymentDetails $paymentDetails)
    {
        $this->roomRateDetails = new RoomRateDetails($room);
        $this->guaranteeOrDeposit = new GuaranteeOrDeposit($paymentDetails);
        $this->guestList = new GuestList($room);
    }
}