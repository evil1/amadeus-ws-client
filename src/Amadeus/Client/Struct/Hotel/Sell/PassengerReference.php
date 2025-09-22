<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\Guest;

class PassengerReference
{
    public string $type;

    public int $value;

    public function __construct(Guest $guest, bool $guestList = false)
    {
        $this->type = $guest->type;
        if ($guestList) {
            if (Guest::TYPE_BOOKING_HOLDER == $this->type) {
                $this->type = 'RMO';
            } else {
                $this->type = 'ROP';
            }
        }
        $this->value = $guest->tattoo;
    }
}