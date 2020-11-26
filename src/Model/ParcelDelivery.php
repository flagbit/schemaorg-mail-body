<?php

namespace EinsUndEins\SchemaOrgMailBody\Model;

use InvalidArgumentException;

class ParcelDelivery extends AbstractOrder implements ParcelDeliveryInterface
{
    /** @var string $deliveryName */
    private $deliveryName;
    /** @var string $trackingNumber */
    private $trackingNumber;

    /**
     * ParcelDelivery constructor.
     *
     * @param string $deliveryName
     * @param string $trackingNumber
     * @param string $orderNumber
     * @param string $orderStatus
     * @param string $shopName
     *
     * @throws InvalidArgumentException
     */
    public function __construct(
        string $deliveryName,
        string $trackingNumber,
        string $orderNumber,
        string $orderStatus,
        string $shopName
    ) {
        if (!in_array($orderStatus, self::POSSIBLE_ORDER_STATUS)) {
            throw new InvalidArgumentException('Status is not one of the possible status.');
        }
        $this->orderStatus = $orderStatus;
        $this->deliveryName = $deliveryName;
        $this->trackingNumber = $trackingNumber;
        $this->orderNumber = $orderNumber;
        $this->shopName = $shopName;
    }

    /**
     * @inheritDoc
     */
    public function getDeliveryName(): string
    {
        return $this->deliveryName;
    }

    /**
     * @inheritDoc
     */
    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }
}
