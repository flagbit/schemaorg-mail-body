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
        $this->setOrderStatus($orderStatus)
            ->setDeliveryName($deliveryName)
            ->setTrackingNumber($trackingNumber)
            ->setOrderNumber($orderNumber)
            ->setShopName($shopName);
    }

    /**
     * @inheritDoc
     */
    public function setDeliveryName(string $deliveryName): ParcelDeliveryInterface
    {
        $this->deliveryName = $deliveryName;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setTrackingNumber(string $trackingNumber): ParcelDeliveryInterface
    {
        $this->trackingNumber = $trackingNumber;

        return $this;
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
