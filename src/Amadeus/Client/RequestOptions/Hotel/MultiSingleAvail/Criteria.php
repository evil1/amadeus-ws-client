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

namespace Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail;

use Amadeus\Client\LoadParamsFromArray;
use DateTime;

/**
 * Criteria
 *
 * @package Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class Criteria extends LoadParamsFromArray
{
    const ALT_AVAIL_NEVER = "Never";

    /**
     * @var bool
     */
    public bool $exactMatch = true;

    /**
     * @var HotelReference[]
     */
    public array $hotelReferences = [];

    /**
     * @var DateTime
     */
    public DateTime $stayStart;

    /**
     * @var DateTime
     */
    public DateTime $stayEnd;

    /**
     * @var Rates[]
     */
    public array $rates = [];

    /**
     * @var Room[]
     */
    public array $rooms = [];

    /**
     * self::ALT_AVAIL_*
     *
     * @var string
     */
    public string $alternateAvailability;

    /**
     * The RatePlanCode assigned by the receiving system for the inventory item in response to a new rate plan
     * notification. (Implementation Notes: This would only be returned when the notification is of type New and the
     * sender is translating RatePlanCode values. On subsequent transactions for this rate plan, the sender would
     * populate the RatePlanCode attribute with this value returned by the receiver.)
     *
     * @var string[]
     */
    public array $ratePlanCodes = [];
}
