<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Guest;

class PassengerReference
{
    public string $type;

    public int $value;

    public function __construct(Guest $guest)
    {
        $this->type = $guest->type;
        $this->value = $guest->tattoo;
    }
}