<?php

namespace Amadeus\Client\Struct\Hotel\CompleteReservationDetails;

class RetrievalKey
{
    public Reservation $reservation;

    public function __construct(string $controlNumber)
    {
        $this->reservation = new Reservation($controlNumber);
    }
}