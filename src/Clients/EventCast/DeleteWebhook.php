<?php

/*
 * This file is part of the BringApi package.
 *
 * (c) Alex Bachynskyi <bachynskyialex@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crakter\BringApi\Clients\EventCast;

use Crakter\BringApi\DefaultData\ClientUrls;
use Crakter\BringApi\Clients\Base;
use Crakter\BringApi\Clients\ClientsInterface;
use Crakter\BringApi\DefaultData\HttpMethods;
use Crakter\BringApi\Exception\BringClientException;
use Crakter\BringApi\Exception\ApiEntityNotCorrectException;

/**
 * BringApi DeleteWebhook
 *
 * @author Alex Bachynskyi <bachynskyialex@gmail.com>
 */
class DeleteWebhook extends Base implements ClientsInterface
{
    /**
     * @var string $clientUrl    The clients url
     */
    protected $clientUrl = ClientUrls::EVENT_DELETE_WEBHOOK;

    /**
     * @var string $httpMethod  The Method for HTTP
     */
    protected $httpMethod = HttpMethods::DELETE;

    /**
     * WebhookSubscriptionId to be used for deleting
     * @var string $webhookSubscriptionId
     */
    protected $webhookSubscriptionId;

    /**
     * Sets the webhookSubscriptionId for deleting
     * @param string $webhookSubscriptionId
     * @example db285042-6e8d-4563-94ca-eb1100706a73 ('id' from get webhook result)
     * @return ClientsInterface All clients must implement ClientsInterface
     */
    public function setWebhookSubscriptionId(string $webhookSubscriptionId): ClientsInterface
    {
        $this->webhookSubscriptionId = $webhookSubscriptionId;

        return $this;
    }

    /**
     * Gets the webhookSubscriptionId for deleting
     * @example db285042-6e8d-4563-94ca-eb1100706a73
     * @return string
     */
    public function getWebhookSubscriptionId(): string
    {
        return $this->webhookSubscriptionId;
    }

    /**
     * {@inheritdoc}
     */
    public function processClientUrlVariables(): ClientsInterface
    {
        $this->setClientUrlVariables($this->getWebhookSubscriptionId());

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function checkErrors(): ClientsInterface
    {
        $checkIfNotError = $this->isJson($this->toJson());

        if ($checkIfNotError === false) {
            throw new BringClientException($this->toJson());
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     * @throws ApiEntityNotCorrectException
     */
    public function processEntity(): ClientsInterface
    {
        return $this;
    }
}
