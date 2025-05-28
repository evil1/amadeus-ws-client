<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class Commit
{
    public bool $IgnoreWarningOption;

    public string $ReceivedFrom;

    public function __construct(bool $ignoreWarnings, string $receivedFrom)
    {
        $this->IgnoreWarningOption = $ignoreWarnings;
        $this->ReceivedFrom = $receivedFrom;
    }
}