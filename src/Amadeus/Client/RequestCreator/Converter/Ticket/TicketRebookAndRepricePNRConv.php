<?php

namespace Amadeus\Client\RequestCreator\Converter\Ticket;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;

/**
 * Ticket_RebookAndRepricePNR Request converter
 *
 * @package Amadeus\Client\RequestCreator\Converter\Ticket
 * @author Dmitriy Gritsenko <dg@uis.kz>
 */
class TicketRebookAndRepricePNRConv extends BaseConverter
{
    /**
     * @param TicketRepricePnrWithBookingClassOptions $requestOptions
     * @param int|string $version
     * @return Struct\Ticket\RepricePnrWithBookingClass
     */
    public function convert($requestOptions, $version)
    {
        return new Struct\Ticket\RepricePnrWithBookingClass($requestOptions);
    }
}