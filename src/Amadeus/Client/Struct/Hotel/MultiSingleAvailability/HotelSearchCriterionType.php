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

/**
 * HotelSearchCriterionType
 *
 * @package Amadeus\Client\Struct\Hotel\MultiSingleAvailability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class HotelSearchCriterionType
{
    /**
     * @var HotelAmenity[]
     */
    public array $HotelAmenity = [];

    /**
     * @var RoomAmenity[]
     */
    public array $RoomAmenity = [];

    /**
     * @var HotelFeature[]
     */
    public array $HotelFeature = [];

    /**
     * @var Award[]
     */
    public array $Award = [];

    /**
     * @var Recreation[]
     */
    public array $Recreation = [];

    /**
     * @var Service[]
     */
    public array $Service = [];

    /**
     * @var Transportation[]
     */
    public array $Transportation = [];

    /**
     * @var StayDateRange
     */
    public StayDateRange $StayDateRange;

    /**
     * @var RateRange[]
     */
    public array $RateRange = [];

    /**
     * @var RatePlanCandidates
     */
    public RatePlanCandidates $RatePlanCandidates;

    /**
     * @var Profiles
     */
    public Profiles $Profiles;

    /**
     * @var RoomStayCandidates
     */
    public RoomStayCandidates $RoomStayCandidates;

    /**
     * @var AcceptedPayments
     */
    public AcceptedPayments $AcceptedPayments;

    /**
     * @var Media[]
     */
    public array $Media = [];

    /**
     * @var HotelMeetingFacility[]
     */
    public array $HotelMeetingFacility = [];

    /**
     * @var MealPlan
     */
    public MealPlan $MealPlan;

    /**
     * @var RebatePrograms
     */
    public RebatePrograms $RebatePrograms;

    /**
     * @var UserGeneratedContent
     */
    public UserGeneratedContent $UserGeneratedContent;

    /**
     * @var bool
     */
    public bool $ExactMatch;

    public $ImportanceType;

    public $Ranking;

    public $Position;

    public $Address;

    public $Telephone;

    public array $RefPoint = [];

    public $CodeRef;

    /**
     * @var HotelRef[]
     */
    public array $HotelRef = [];

    public $Radius;

    public $MapArea;

    public $AdditionalContents;
}
