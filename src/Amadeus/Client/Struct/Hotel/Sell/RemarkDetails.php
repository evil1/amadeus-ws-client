<?php

namespace Amadeus\Client\Struct\Hotel\Sell;

class RemarkDetails
{
    public string $type =  'HSI';

    public string $freetext;

    public int $businessFunction = 3;

    public string $language = 'EN';

    public string $source = 'M';

    public int $encoding = 7;

    public function __construct(string $remark)
    {
        $this->freetext = $remark;
    }
}