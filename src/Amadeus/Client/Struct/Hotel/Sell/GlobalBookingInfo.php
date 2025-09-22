<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Room;

class GlobalBookingInfo
{
    public MarkerGlobalBookingInfo $markerGlobalBookingInfo;

    public BookingSource $bookingSource;

    /**
     * Passenger details
     * @var RepresentativeParties[]
     */
    public array $representativeParties = [];

    public function __construct(Room $room)
    {
        $this->markerGlobalBookingInfo = new MarkerGlobalBookingInfo($room);
        $this->bookingSource = new BookingSource($room);

        foreach ($room->guests as $guest) {
            $this->representativeParties[] = new RepresentativeParties($guest);
        }
    }
}