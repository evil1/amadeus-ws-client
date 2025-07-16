<?php

namespace Amadeus\Client\RequestOptions;

/**
 * Hotel_DescriptiveInfo request options
 *
 * @package Amadeus\Client\RequestOptions
 * @author Dmitriy Gritsenko <dg@uis.kz>
 */
class HotelDescriptiveInfoOptions extends Base
{

    /**
     * 2-character language code
     *
     * @var string
     */
    public string $languageCode;

    public string $version = "3.000";

    public string $echoToken;

    /**
     * @var Hotel\DescriptiveInfo\Hotel[]
     */
    public array $hotels = [];
}