<?php
namespace Amadeus\Client\Struct\Hotel;

use Amadeus\Client\RequestOptions\HotelDescriptiveInfoOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\Hotel;
use Amadeus\Client\Struct\Hotel\DescriptiveInfo\HotelDescriptiveInfo;
use Amadeus\Client\Struct\Hotel\DescriptiveInfo\HotelDescriptiveInfos;

/**
 * Hotel_DescriptiveInfo request structure
 *
 * @package Amadeus\Client\Struct\Hotel
 * @author Dmitriy Gritsenko <dg@uis.kz>
 */
class DescriptiveInfo extends BaseWsMessage
{
    public string $EchoToken = 'WithParsing';

    public string $Version;


    public string $PrimaryLangID;

    public HotelDescriptiveInfos $HotelDescriptiveInfos;

    /**
     * MultiSingleAvailability constructor.
     *
     * @param HotelDescriptiveInfoOptions $options
     */
    public function __construct(HotelDescriptiveInfoOptions $options)
    {
        $this->loadAttributes($options);
        $this->loadHotels($options->hotels);
    }

    /**
     * @param HotelDescriptiveInfoOptions $options
     */
    protected function loadAttributes(HotelDescriptiveInfoOptions $options): void
    {
        $this->Version = $options->version;

        if (!empty($options->languageCode)) {
            $this->PrimaryLangID = $options->languageCode;
        }

        if (!empty($options->echoToken)) {
            $this->EchoToken = $options->echoToken;
        }
    }

    /**
     * @param Hotel[] $hotels
     */
    protected function loadHotels(array $hotels): void
    {
        $this->HotelDescriptiveInfos = new HotelDescriptiveInfos();

        foreach ($hotels as $hotel) {
            $this->HotelDescriptiveInfos->HotelDescriptiveInfo[] = new HotelDescriptiveInfo($hotel);
        }
    }
}