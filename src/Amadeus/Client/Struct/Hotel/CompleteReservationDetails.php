<?php

namespace Amadeus\Client\Struct\Hotel;

use Amadeus\Client\RequestOptions\HotelCompleteReservationDetailsOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Hotel\CompleteReservationDetails\RetrievalKeyGroup;

/**
 * Hotel_CompleteReservationDetails request structure
 *
 * @package Amadeus\Client\Struct\Hotel
 * @author Dmitriy Gritsenko <gritsenko.dmitriy@gmail.com>
 */
class CompleteReservationDetails extends BaseWsMessage
{
    public RetrievalKeyGroup $retrievalKeyGroup;

    public function __construct(HotelCompleteReservationDetailsOptions $options)
    {
        $this->retrievalKeyGroup = new RetrievalKeyGroup($options);
    }
}