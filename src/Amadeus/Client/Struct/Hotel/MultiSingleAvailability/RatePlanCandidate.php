<?php

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

/**
 * Element used to identify available products and rates
 */
class RatePlanCandidate
{
    public string $RatePlanCode;

    public function __construct(string $ratePlanCode)
    {
        $this->RatePlanCode = $ratePlanCode;
    }
}