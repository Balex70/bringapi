<?php

/*
 * This file is part of the BringApi package.
 *
 * (c) Alex Bachynskyi <bachynskyialex@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crakter\BringApi\Entity;

/**
 * BringApi CreateWebhookEntity
 *
 * An class to supply correct information to Bring Api servers
 *
 * Quick setup: <code>$createWebhook = (new CreateWebhookEntity);</code>
 *
 * @property array $configuration    This needs to be set to an array of configuration
 * @property array $event_groups    When registering for a Webhook you can choose between a range of different event groups that you can subscribe for
 * @property string $trackingId    trackingId
 * @method ApiEntityInterface setEventGroups(array $array)
 * @author Alex Bachynskyi <bachynskyialex@gmail.com>
 */
class CreateWebhookEntity extends ApiEntityBase implements ApiEntityInterface
{
    /**
     * @var array $configuration This needs to be set to an array of configuration
     */
    public $configuration = [];

    /**
     * @var array $eventGroups When registering for a Webhook you can choose between a range of different event groups that you can subscribe for
     */
    public $event_groups = [];

    /**
     * trackingId
     *
     * @var string
     */
    public $trackingId;

    public function setConfiguration(array $configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * Set $eventGroups When registering for a Webhook you can choose between a range of different event groups that you can subscribe for
     *
     * @param  array  $event_groups  $eventGroups When registering for a Webhook you can choose between a range of different event groups that you can subscribe for
     *
     * @return  self
     */
    public function setEventGroups(array $event_groups): void
    {
        $this->event_groups = $event_groups;
    }

    public function setTrackingId(string $trackingId): void
    {
        $this->trackingId = $trackingId;
    }
}
