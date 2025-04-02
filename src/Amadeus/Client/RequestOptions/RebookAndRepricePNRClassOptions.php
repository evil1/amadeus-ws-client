<?php

namespace Amadeus\Client\RequestOptions;

use Amadeus\Client\Struct\Fare\MasterPricer\PNRSegmentReference;
use Amadeus\Client\Struct\Ticket\RepricePnrWithBookingClass\ExchangeInformationGroup;
use Amadeus\Client\Struct\Ticket\RepricePnrWithBookingClass\PricingOption;

class RebookAndRepricePNRClassOptions extends Base
{
    public string $bookingIdentifier;

    /**
     * @var ExchangeInformationGroup[]
     */
    public array $bound = [];

    /**
     * @var PNRSegmentReference[]
     */
    public array $cancellation = [];

    /**
     * @var PricingOption[]
     */
    public array $itineraryPricingOptions = [];
}