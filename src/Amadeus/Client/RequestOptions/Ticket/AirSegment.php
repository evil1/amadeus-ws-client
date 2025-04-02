<?php

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Pricing
 *
 * Used for RebookAndReprice flow (with ATC Shopper)!
 *
 * @package Amadeus\Client\RequestOptions\Ticket
 */
class AirSegment extends LoadParamsFromArray
{
    const STATUS_SELL_SEGMENT = "NN";

    public string $from;

    public string $to;

    public string $carrier;

    public string $flightNumber;

    public string $bookingClass;

    public \DateTime $departure;

    public \DateTime $arrival;

    public string $status = self::STATUS_SELL_SEGMENT;

    public int $seats = 1;

    public bool $isOpen = false;
}