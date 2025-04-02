<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class Bound
{
    public int $NIP;

    public string $ActionCode;

    public Segment $Segment;

    public function __construct(\Amadeus\Client\RequestOptions\Ticket\RebookAndRepricePNR\Segment $segment, string $id)
    {
        $this->NIP = $segment->nrOfPassengers;
        $this->ActionCode = $segment->statusCode;
        $this->Segment = new Segment($segment, $id);
    }
}