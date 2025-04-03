<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class Segment
{
    public string $RequestID;

    public string $bkgClass;

    public bool $isOpenSegment;

    public string $identifier;

    public Location $start;

    public Location $end;

    public serviceProvider $serviceProvider;

    public function __construct(\Amadeus\Client\RequestOptions\Ticket\RebookAndRepricePNR\Segment $segment, string $id)
    {
        $this->RequestID = $id;
        $this->bkgClass = $segment->bookingClass;
        $this->isOpenSegment = $segment->isOpenSegment;
        $this->identifier = $segment->flightNumber;
        $this->serviceProvider = new serviceProvider($segment->companyCode);
        $this->start = new Location($segment->departureDate, $segment->from);
        $this->end = new Location($segment->arrivalDate, $segment->to);
    }
}