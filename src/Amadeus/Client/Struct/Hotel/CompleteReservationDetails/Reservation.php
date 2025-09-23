<?php

namespace Amadeus\Client\Struct\Hotel\CompleteReservationDetails;

class Reservation
{
    public string $companyId = '1A';

    public string $controlNumber;

    public string $controlType = 'P';

    public function __construct(string $controlNumber)
    {
        $this->controlNumber = $controlNumber;
    }
}