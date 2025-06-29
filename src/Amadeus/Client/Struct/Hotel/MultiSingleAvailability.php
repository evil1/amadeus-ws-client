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

namespace Amadeus\Client\Struct\Hotel;

use Amadeus\Client\RequestOptions\HotelMultiSingleAvailOptions;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Hotel\MultiSingleAvailability\AvailRequestSegment;
use Amadeus\Client\Struct\Hotel\MultiSingleAvailability\AvailRequestSegments;

/**
 * Hotel_MultiSingleAvailability request structure
 *
 * @package Amadeus\Client\Struct\Hotel
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class MultiSingleAvailability extends BaseWsMessage
{
    /**
     * @var string
     */
    public string $EchoToken = 'MultiSingle';

    /**
     * @var string
     */
    public string $Version;

    /**
     * @var bool
     */
    public bool $SummaryOnly = true;

    /**
     * @var bool
     */
    public bool $RateRangeOnly = true;

    /**
     * @var bool
     */
    public bool $RateDetailsInd = true;

    /**
     * @var bool
     */
    public bool $ExactMatchOnly;

    /**
     * @var bool
     */
    public bool $AvailRatesOnly;

    /**
     * @var bool
     */
    public bool $OnRequestInd;

    /**
     * @var string
     */
    public string $PrimaryLangID;

    /**
     * @var string
     */
    public string $RequestedCurrency;


    /**
     * @var MultiSingleAvailability\AvailRequestSegments
     */
    public $AvailRequestSegments;

    /**
     * @var MultiSingleAvailability\PosType
     */
    public $POS;

    /**
     * @var string
     */
    public string $SortOrder;

    /**
     * @var int
     */
    public int $MaxResponses;

    /**
     * @var string
     */
    public string $SearchCacheLevel;

    /**
     * MultiSingleAvailability constructor.
     *
     * @param HotelMultiSingleAvailOptions $options
     */
    public function __construct(HotelMultiSingleAvailOptions $options)
    {
        $this->loadAttributes($options);
        $this->loadSegments($options->segments);
    }

    /**
     * @param HotelMultiSingleAvailOptions $options
     */
    protected function loadAttributes(HotelMultiSingleAvailOptions $options): void
    {
        $this->Version = $options->version;
        $this->AvailRatesOnly = $options->availableRatesOnly;
        $this->ExactMatchOnly = $options->exactMatchOnly;
        $this->PrimaryLangID = $options->languageCode;
        $this->RateDetailsInd = $options->rateDetails;
        $this->RateRangeOnly = $options->rateRangeOnly;
        $this->RequestedCurrency = $options->requestedCurrency;
        $this->SummaryOnly = $options->summaryOnly;
        $this->SortOrder = $options->sortOrder;
        $this->MaxResponses = $options->maxResponses;
        $this->SearchCacheLevel = $options->searchCacheLevel;
    }

    /**
     * @param MultiSingleAvail\Segment[] $segments
     */
    protected function loadSegments(array $segments): void
    {
        $this->AvailRequestSegments = new AvailRequestSegments();

        foreach ($segments as $segment) {
            $this->AvailRequestSegments->AvailRequestSegment[] = new AvailRequestSegment($segment);
        }
    }
}
