<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

use Amadeus\Client\RequestOptions\Ticket\RebookAndRepricePNR\Ticket;

class ItineraryPricingOptions
{
    /**
     * @var ItineraryPricingOption[]
     */
    public array $ItineraryPricingOption = [];

    /**
     * @param Ticket[] $tickets
     */
    public function __construct(array $tickets)
    {
        foreach ($tickets as $ticket) {
            $this->ItineraryPricingOption[] = new ItineraryPricingOption($ticket);
        }
    }
}