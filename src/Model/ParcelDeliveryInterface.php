<?php

namespace Model;

interface ParcelDeliveryInterface extends AbstractOrderInterface
{
    /**
     * @param string $deliveryName
     * @param string $trackingNumber
     * @param string $orderNumber
     * @param string $orderStatus
     * @param string $shopName
     *
     * @return ParcelDeliveryInterface
     */
    public function __construct(
        string $deliveryName,
        string $trackingNumber,
        string $orderNumber,
        string $orderStatus,
        string $shopName
    );

    /**
     * Set delivery name
     *
     * @param string $deliveryName
     *
     * @return $this
     */
    public function setDeliveryName(string $deliveryName): ParcelDeliveryInterface;

    /**
     * Set tracking number
     *
     * @param string $trackingNumber
     *
     * @return $this
     */
    public function setTrackingNumber(string $trackingNumber): ParcelDeliveryInterface;

    /**
     * Get delivery name
     *
     * @return string
     */
    public function getDeliveryName(): string;

    /**
     * Get tracking number
     *
     * @return string
     */
    public function getTrackingNumber(): string;
}
