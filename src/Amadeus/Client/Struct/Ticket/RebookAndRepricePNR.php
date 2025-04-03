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

namespace Amadeus\Client\Struct\Ticket;

use Amadeus\Client\RequestOptions\Fare\PricePnr\AwardPricing;
use Amadeus\Client\RequestOptions\Fare\PricePnr\ExemptTax;
use Amadeus\Client\RequestOptions\Fare\PricePnr\FareBasis;
use Amadeus\Client\RequestOptions\Fare\PricePnr\Tax;
use Amadeus\Client\RequestOptions\Ticket\ExchangeInfoOptions;
use Amadeus\Client\RequestOptions\Ticket\MultiRefOpt;
use Amadeus\Client\RequestOptions\Ticket\PaxSegRef;
use Amadeus\Client\RequestOptions\TicketRebookAndRepricePNROptions;
use Amadeus\Client\RequestOptions\TicketRepricePnrWithBookingClassOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Fare\MasterPricer\PNRSegmentReference;
use Amadeus\Client\Struct\Fare\PricePnr13\CarrierInformation;
use Amadeus\Client\Struct\Fare\PricePnr13\Currency;
use Amadeus\Client\Struct\Fare\PricePnr13\FrequentFlyerInformation;
use Amadeus\Client\Struct\Fare\PricePnr13\FrequentTravellerDetails;
use Amadeus\Client\Struct\Fare\PricePnr13\LocationInformation;
use Amadeus\Client\Struct\Fare\PricePnr13\OptionDetail;
use Amadeus\Client\Struct\Fare\PricePnr13\PaxSegTstReference;
use Amadeus\Client\Struct\Fare\PricePnr13\PenDisInformation;
use Amadeus\Client\Struct\Fare\PricePnr13\TaxData;
use Amadeus\Client\Struct\Fare\PricePnr13\TaxInformation;
use Amadeus\Client\Struct\Ticket\RebookAndRepricePNR\Rebooking;
use Amadeus\Client\Struct\Ticket\RebookAndRepricePNR\Repricing;
use Amadeus\Client\Struct\Ticket\RebookAndRepricePNR\Reservation;
use Amadeus\Client\Struct\Ticket\RepricePnrWithBookingClass\ExchangeInformationGroup;
use Amadeus\Client\Struct\Ticket\RepricePnrWithBookingClass\PricingOption;
use Amadeus\Client\Struct\Ticket\RepricePnrWithBookingClass\PricingOptionKey;

/**
 * Ticket_RebookAndRepricePNRClass request structure
 *
 * @package Amadeus\Client\Struct\Ticket
 * @author Dmitriy Gritsenko <dg@uis.kz>
 */
class RebookAndRepricePNR extends BaseWsMessage
{
    public array $Actions = [];
    /**
     * @var Reservation
     */
    public Reservation $Reservation;

    public Rebooking $Rebooking;

    public Repricing $Repricing;

    /**
     * RebookAndRepricePNR constructor.
     *
     * @param TicketRebookAndRepricePNROptions $options
     */
    public function __construct(TicketRebookAndRepricePNROptions $options)
    {
        if (!is_null($options)) {
            $this->Actions = $options->actions;
            $this->Reservation = new Reservation($options->bookingIdentifier);
            $this->Rebooking = new Rebooking($options->cancellation, $options->segments);
//            $this->loadExchangeInfo($options->exchangeInfo);
//
//            $this->pricingOption = $this->loadPricingOptionsFromRequestOptions($options);
        }
    }
}
