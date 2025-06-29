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

use Amadeus\Client\Struct\WsMessageUtility;
use DateTime;

/**
 * StayDateRange
 *
 * @package Amadeus\Client\Struct\Hotel\MultiSingleAvailability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class StayDateRange extends WsMessageUtility
{
    /**
     * yyyy-mm-dd
     *
     * @var string
     */
    public string $Start;

    /**
     * @var string
     */
    public string $Duration;

    /**
     * yyyy-mm-dd
     *
     * @var string
     */
    public string $End;

    /**
     * StayDateRange constructor.
     *
     * @param DateTime $start
     * @param DateTime $end
     */
    public function __construct(DateTime $start, DateTime $end)
    {
        $this->Start = $this->makeDateString($start);
        $this->End = $this->makeDateString($end);
    }

    /**
     * yyyy-mm-dd
     *
     * @param DateTime|null $date
     * @return string
     */
    protected function makeDateString(mixed $date): string
    {
        $dateStr = '0000-00-00';

        if ($date instanceof DateTime) {
            $dateStr = $date->format('Y-m-d');
        }

        return $dateStr;
    }
}
