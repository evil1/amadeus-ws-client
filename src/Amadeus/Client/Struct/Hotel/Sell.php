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

use Amadeus\Client\RequestOptions\HotelSellOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Hotel\Sell\RoomStayData;
use Amadeus\Client\Struct\Hotel\Sell\TravelAgentRef;

/**
 * Hotel_Sell request structure
 *
 * @package Amadeus\Client\Struct\Hotel
 * @author Dmitriy Gritsenko <gritsenko.dmitriy@gmail.com>
 */
class Sell extends BaseWsMessage
{
    public TravelAgentRef $travelAgentRef;

    /**
     * @var RoomStayData[]
     */
    public array $roomStayData = [];

    public function __construct(HotelSellOptions $options)
    {
        $this->travelAgentRef = new TravelAgentRef();

        foreach ($options->rooms as $room) {
            $this->roomStayData[] = new RoomStayData($room);
        }
    }
}