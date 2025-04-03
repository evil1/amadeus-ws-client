<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class Location
{
    public string $dateTime;

    public string $locationCode;

    public function __construct(\DateTime $start, string $locationCode)
    {
        $this->dateTime = $start->format('Y-m-d\TH:i:s');
        $this->locationCode = $locationCode;
    }
}