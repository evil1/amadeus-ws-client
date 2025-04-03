<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

use Amadeus\Client\RequestOptions\Ticket\RebookAndRepricePNR\Ticket;

class Repricing
{
    public ItineraryPricingOptions $ItineraryPricingOptions;

    /**
     * @param Ticket[] $tickets
     */
    public function __construct(array $tickets)
    {
        $this->ItineraryPricingOptions = new ItineraryPricingOptions($tickets);
    }
}