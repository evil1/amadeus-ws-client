<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

class SupplementaryInfo
{
    public RemarkDetails $remarkDetails;

    public function __construct(string $remark)
    {
        $this->remarkDetails = new RemarkDetails($remark);
    }
}