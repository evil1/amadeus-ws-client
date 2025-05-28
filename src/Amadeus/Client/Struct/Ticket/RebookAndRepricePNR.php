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

use Amadeus\Client\RequestOptions\TicketRebookAndRepricePNROptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Ticket\RebookAndRepricePNR\Commit;
use Amadeus\Client\Struct\Ticket\RebookAndRepricePNR\Rebooking;
use Amadeus\Client\Struct\Ticket\RebookAndRepricePNR\Repricing;
use Amadeus\Client\Struct\Ticket\RebookAndRepricePNR\Reservation;

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

    public Commit $Commit;

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
            $this->Commit = new Commit($options->ignoreWarnings, $options->receivedFrom);
            $this->Rebooking = new Rebooking($options->cancellation, $options->segments);
            $this->Repricing = new Repricing($options->tickets);
        }
    }
}
