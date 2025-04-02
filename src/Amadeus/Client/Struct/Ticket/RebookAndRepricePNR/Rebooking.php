<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class Rebooking
{
    public array $Cancellation = [];

    public array $Bounds = [];

    public function __construct(array $segments)
    {
        foreach ($segments as $segmentRef) {
            $this->Cancellation[] = new Ref([
               'id' => $segmentRef,
               'type' => Ref::TATTOO_TYPE_SEGMENT,
            ]);
        }
    }
}