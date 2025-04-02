<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class Segment
{
    public string $RequestID;

    public string $bkgClass;

    public bool $isOpenSegment;

    public string $identifier;

    public function __construct(\Amadeus\Client\RequestOptions\Ticket\RebookAndRepricePNR\Segment $segment, string $id)
    {
        $this->RequestID = $id;
        $this->bkgClass = $segment->bookingClass;
        $this->isOpenSegment = $segment->isOpenSegment;
        $this->identifier = $segment->flightNumber;
    }
}