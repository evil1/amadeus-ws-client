<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class TicketingInfo
{
    public string $Number;

    public function __construct(string $ticketNumber)
    {
        $this->Number = $ticketNumber;
    }
}