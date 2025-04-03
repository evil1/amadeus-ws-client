<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

use Amadeus\Client\RequestOptions\Ticket\RebookAndRepricePNR\Ticket;

class ItineraryPricingOption
{
    public TicketingInfo $TicketingInfo;

    public Booking $Booking;

    public AssociatedPNRElement $AssociatedPNRElement;

    /**
     * @param Ticket $ticket
     */
    public function __construct(Ticket $ticket)
    {
        $this->TicketingInfo = new TicketingInfo($ticket->ticketNumber);
        $this->Booking = new Booking();
        $this->AssociatedPNRElement = new AssociatedPNRElement($ticket->passengerNumber);
    }
}