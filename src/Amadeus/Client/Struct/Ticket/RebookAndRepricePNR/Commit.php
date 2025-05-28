<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class Commit
{
    public bool $IgnoreWarningsOption;

    public string $ReceivedFrom;

    public function __construct(bool $ignoreWarnings, string $receivedFrom)
    {
        $this->IgnoreWarningsOption = $ignoreWarnings;
        $this->ReceivedFrom = $receivedFrom;
    }
}