<?php

namespace Amadeus\Client\Struct\Hotel\CompleteReservationDetails;

class Tattoo
{
    public ReferenceDetails $referenceDetails;

    public function __construct(int $segment)
    {
        $this->referenceDetails = new ReferenceDetails($segment);
    }
}