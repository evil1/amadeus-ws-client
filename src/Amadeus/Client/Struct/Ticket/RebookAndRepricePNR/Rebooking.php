<?php

namespace Amadeus\Client\Struct\Ticket\RebookAndRepricePNR;

class Rebooking
{
    public array $Cancellation = [];

    public array $Bounds = [];

    /**
     * @param int[] $cancelSegments
     * @param \Amadeus\Client\RequestOptions\Ticket\RebookAndRepricePNR\Segment[] $segments
     */
    public function __construct(array $cancelSegments, array $segments)
    {
        foreach ($cancelSegments as $segmentRef) {
            $this->Cancellation[] = new Ref([
               'id' => $segmentRef,
               'type' => Ref::TATTOO_TYPE_SEGMENT,
            ]);
        }

        foreach ($segments as $segment) {
            \Yii::error(print_r($segment, true));
        }
    }
}