<?php

/*
 * This file is part of the BringApi package.
 *
 * (c) Alex Bachynskyi <bachynskyialex@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crakter\BringApi\Entity\EventCast;

use Crakter\BringApi\Entity\ApiEntityBase;
use Crakter\BringApi\Entity\ApiEntityInterface;

/**
 * BringApi ConfigurationEntity
 *
 * An class to supply correct information to Bring Api servers
 *
 * Quick setup: <code>$consignment = (new ConfigurationEntity)
 *
 * @property string $contentType    Optional. Return format.
 * @property string $url    Callback URL must be accessible on the internet and able to receive requests from Bring IPs
 * @property array $headers    Optional. Array of custom headers that were specified in the Webhook configuration will be appended to hook
 * @method ApiEntityInterface setContentType(string $string)
 * @method string getContentType()
 * @method ApiEntityInterface setUrl(string $string)
 * @method string getUrl()
 * @method ApiEntityInterface addHeader(array $array)
 * @author Alex Bachynskyi <bachynskyialex@gmail.com>
 */
class ConfigurationEntity extends ApiEntityBase implements ApiEntityInterface
{
    /**
     * @var string $content_type return format
     */
    public $content_type = 'application/json';

    /**
     * @var string
     */
    public $url;

    /**
     * @var array $headers
     */
    public $headers = [];

    /**
     * Method to add to array of headers.
     * @param  ApiEntityInterface $header Information about the new header
     * @return ApiEntityInterface
     */
    public function addHeader(array $header): ApiEntityInterface
    {
        $this->headers[] = $header;

        return $this;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
}
