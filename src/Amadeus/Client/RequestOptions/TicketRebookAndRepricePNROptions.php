<?php

namespace Amadeus\Client\RequestOptions;

use Amadeus\Client\RequestOptions\Pnr\Reference;
use Amadeus\Client\Struct\Ticket\RepricePnrWithBookingClass\ExchangeInformationGroup;
use Amadeus\Client\Struct\Ticket\RepricePnrWithBookingClass\PricingOption;

class TicketRebookAndRepricePNROptions extends Base
{
    public string $bookingIdentifier;

    /**
     * @var ExchangeInformationGroup[]
     */
    public array $bound = [];

    /**
     * @var Reference[]
     */
    public array $cancellation = [];

    /**
     * @var PricingOption[]
     */
    public array $itineraryPricingOptions = [];
}