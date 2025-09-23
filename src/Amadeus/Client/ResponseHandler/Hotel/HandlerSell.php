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

namespace Amadeus\Client\ResponseHandler\Hotel;

use Amadeus\Client\ResponseHandler\StandardResponseHandler;
use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

/**
 * Hotel_Sell Response Handler
 *
 * @package Amadeus\Client\ResponseHandler\Hotel
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class HandlerSell extends StandardResponseHandler
{

    const Q_ERR_CODE = "/m:Hotel_SellReply/m:errorGroup/m:messageErrorInformation/m:errorDetails/m:errorCode";
    const Q_ERR_CAT = "/m:Hotel_SellReply/m:errorGroup/m:messageErrorInformation/m:errorDetails/m:errorCategory";
    const Q_ERR_MSG = "/m:Hotel_SellReply/m:errorGroup/m:errorDescription/m:freeText";

    /**
     * @param SendResult $response
     * @return Result
     */
    public function analyze(SendResult $response): Result
    {
        return $this->analyzeWithErrCodeCategoryMsgQuery(
            $response,
            self::Q_ERR_CODE,
            self::Q_ERR_CAT,
            self::Q_ERR_MSG
        );
    }

}
