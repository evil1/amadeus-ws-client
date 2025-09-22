<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2025 Universal Intelligent Solutions
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
namespace Amadeus\Client\RequestOptions\Hotel\Sell;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Hotel_Sell Payment Options
 *
 * @package Amadeus\Client\RequestOptions\Sell
 * @author Dmitriy Gritsenko <gritsenko.dmitriy@gmail.com>
 */
class PaymentDetails extends LoadParamsFromArray
{
    const PAYMENT_TYPE_GUARANTEE = 1;

    const PAYMENT_TYPE_DEPOSIT = 1;

    const SERVICE_HOTEL = 3;

    const FOP_CREDIT_CARD = 1;

    const FOP_AGENCY_DEPOSIT = 9;

    public int $paymentType = self::PAYMENT_TYPE_GUARANTEE;

    public int $serviceType = self::SERVICE_HOTEL;

    public CreditCardInfo|null $cardInfo = null;
}