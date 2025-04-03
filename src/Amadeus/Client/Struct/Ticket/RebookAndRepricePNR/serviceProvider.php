<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class serviceProvider
{
    public string $code;

    public function __construct(string $airlineCode)
    {
        $this->code = $airlineCode;
    }
}