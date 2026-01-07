<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\HotelReference;

/**
 * HotelRef
 *
 * @package Amadeus\Client\Struct\Hotel\MultiSingleAvailability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class HotelRef
{
    /**
     * @var string
     */
    public string $ChainCode;

    /**
     * @var string
     */
    public string $BrandCode;

    /**
     * @var string
     */
    public string $HotelCode;

    /**
     * @var string
     */
    public string $HotelCityCode;

    /**
     * @var string
     */
    public string $HotelName;

    /**
     * @var string
     */
    public string $HotelCodeContext;

    /**
     * @var string
     */
    public string $ChainName;

    /**
     * @var string
     */
    public string $BrandName;

    /**
     * @var string
     */
    public string $SegmentCategoryCode;

    /**
     * @var string
     */
    public string $LocationCategoryCode;

    /**
     * @var string
     */
    public string $ExtendedCitySearchIndicator;

    /**
     * HotelRef constructor.
     *
     * @param HotelReference $ref
     */
    public function __construct(HotelReference $ref)
    {
        if (!empty($ref->cityCode)) {
            $this->HotelCityCode = $ref->cityCode;
        }

        if (!empty($ref->chainCode)) {
            $this->ChainCode = $ref->chainCode;
        }
        if (!empty($ref->codeContext)) {
            $this->HotelCodeContext = $ref->codeContext;
        }
        if (!empty($ref->hotelCode)) {
            $this->HotelCode = $ref->hotelCode;
        }
        if (!empty($ref->name)) {
            $this->HotelName = $ref->name;
        }
    }
}
