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

use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Room;

/**
 * RoomStayCandidate
 *
 * @package Amadeus\Client\Struct\Hotel\MultiSingleAvailability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class RoomStayCandidate
{
    /**
     * @var int
     */
    public int $RoomID;

    /**
     * @var int
     */
    public int $Quantity;

    /**
     * @var GuestCounts
     */
    public GuestCounts $GuestCounts;

    /**
     * @var string|null Specific system room type code, ex: A1K, A1Q etc.
     */
    public ?string $RoomTypeCode;

    /**
     * @var string|null This is used to indicate the item booked and is primarily used to exchange information with GDSs.
     */
    public ?string $BookingCode;

    /**
     * RoomStayCandidate constructor.
     *
     * @param Room $room
     */
    public function __construct(Room $room)
    {
        $this->RoomID = $room->id;
        $this->Quantity = $room->quantity;

        if (!empty($room->roomTypeCode)) {
            $this->RoomTypeCode = $room->roomTypeCode;
        }

        if (!empty($room->bookingCode)) {
            $this->BookingCode = $room->bookingCode;
        }

        $this->GuestCounts = new GuestCounts($room->guests);
        if (isset($room->guestsIsPerRoom)) {
            $this->GuestCounts->IsPerRoom = $room->guestsIsPerRoom;
        }
    }
}
