<?php

namespace Amadeus\Client\RequestOptions\Ticket\RebookAndRepricePNR;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Pricing
 *
 * Used for RebookAndReprice flow (with ATC Shopper)!
 *
 * @package Amadeus\Client\RequestOptions\Ticket
 */
class Segment extends \Amadeus\Client\RequestOptions\Air\SellFromRecommendation\Segment
{
    public bool $isOpenSegment = false;
}