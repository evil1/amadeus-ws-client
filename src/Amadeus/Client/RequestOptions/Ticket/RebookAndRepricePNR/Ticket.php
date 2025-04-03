<?php

namespace Amadeus\Client\RequestOptions\Ticket\RebookAndRepricePNR;

use Amadeus\Client\LoadParamsFromArray;

class Ticket extends LoadParamsFromArray
{
    public string $ticketNumber;

    public int $passengerNumber;
}