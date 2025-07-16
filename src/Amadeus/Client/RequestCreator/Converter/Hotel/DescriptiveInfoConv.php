<?php

namespace Amadeus\Client\RequestCreator\Converter\Hotel;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\HotelDescriptiveInfoOptions;
use Amadeus\Client\Struct;

/**
 * Hotel_DescriptiveInfo request converter
 *
 * @package Amadeus\Client\RequestCreator\Converter\Hotel
 * @author Dmitriy Gritsenko <dg@uis.kz>
 */
class DescriptiveInfoConv extends BaseConverter
{
    /**
     * @param HotelDescriptiveInfoOptions $requestOptions
     * @param int|string $version
     * @return Struct\Hotel\DescriptiveInfo
     */
    public function convert($requestOptions, $version): Struct\Hotel\DescriptiveInfo
    {
        return new Struct\Hotel\DescriptiveInfo($requestOptions);
    }
}