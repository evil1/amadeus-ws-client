<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class ItineraryPricingOption
{
    public TicketingInfo $TicketingInfo;

    public Booking $Booking;

    public AssociatedPNRElement $AssociatedPNRElement;
}