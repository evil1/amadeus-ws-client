<?php

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

use Amadeus\Client\LoadParamsFromArray;


/**
 * Hotel
 *
 * @package Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo
 * @author Dmitriy Gritsenko <dg@uis.kz>
 */
class Hotel extends LoadParamsFromArray
{
    public string $code;
}