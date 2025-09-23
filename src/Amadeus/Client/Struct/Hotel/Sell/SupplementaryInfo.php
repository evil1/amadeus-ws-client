<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

class SupplementaryInfo
{
    /**
     * @var RemarkDetails[]
     */
    public array $remarkDetails = [];

    public function __construct(array $remarks)
    {
        foreach ($remarks as $remark) {
            $this->remarkDetails[] = new RemarkDetails($remark);
        }
    }
}