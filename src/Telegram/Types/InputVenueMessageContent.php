<?php

declare(strict_types = 1);

namespace unreal4u\TelegramAPI\Telegram\Types;

use unreal4u\TelegramAPI\Telegram\Types\InputMessageContent;

/**
 * Represents the content of a venue message to be sent as the result of an inline query.
 *
 * Objects defined as-is april 2015
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 *
 * @see https://core.telegram.org/bots/api#inputvenuemessagecontent
 */
class InputVenueMessageContent extends InputMessageContent
{
    /**
     * Latitude of the venue in degrees
     * @var float
     */
    public $latitude = 0.0;

    /**
     * Longitude of the venue in degrees
     * @var float
     */
    public $longitude = 0.0;

    /**
     * Name of the venue
     * @var string
     */
    public $title = '';

    /**
     * Address of the venue
     * @var string
     */
    public $address = '';

    /**
     * Optional. Foursquare identifier of the venue, if known
     * @var string
     */
    public $foursquare_id = '';
}
