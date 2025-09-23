<?php

namespace Amadeus\Client\RequestCreator\Converter\Hotel;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\HotelCompleteReservationDetailsOptions;
use Amadeus\Client\Struct;

/**
 * Hotel_CompleteReservationDetails request converter
 *
 * @package Amadeus\Client\RequestCreator\Converter\Hotel
 * @author Dmitriy Gritsenko <dg@uis.kz>
 */
class CompleteReservationDetailsConv extends BaseConverter
{
    /**
     * @param HotelCompleteReservationDetailsOptions $requestOptions
     * @param int|string $version
     * @return Struct\Hotel\CompleteReservationDetails
     */
    public function convert($requestOptions, $version): Struct\Hotel\CompleteReservationDetails
    {
        return new Struct\Hotel\CompleteReservationDetails($requestOptions);
    }
}