<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class Ref
{
    const TATTOO_TYPE_SEGMENT = 'ST';

    public int $TattooValue;

    public string $TattooType;

    public function __construct(array $options)
    {
        $this->TattooType = $options['type'];
        $this->TattooValue = (int)$options['id'];
    }
}