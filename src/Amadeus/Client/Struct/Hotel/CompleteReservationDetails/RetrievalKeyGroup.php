<?php

namespace Amadeus\Client\Struct\Hotel\CompleteReservationDetails;

use Amadeus\Client\RequestOptions\HotelCompleteReservationDetailsOptions;

class RetrievalKeyGroup
{
    public RetrievalKey $retrievalKey;

    public Tattoo $tattooID;

    public function __construct(HotelCompleteReservationDetailsOptions $options)
    {
        $this->retrievalKey = new RetrievalKey($options->controlNumber);
        $this->tattooID = new Tattoo($options->segment);
    }
}