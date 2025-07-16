<?php

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

use Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\Hotel;

class HotelDescriptiveInfo
{
    public string $HotelCode;

    public function __construct(Hotel $hotel)
    {
        $this->HotelCode = $hotel->code;
    }
}