<?php

namespace Amadeus\Client\Struct\Hotel\CompleteReservationDetails;

class ReferenceDetails
{
    public string $type = 'S';

    public int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}