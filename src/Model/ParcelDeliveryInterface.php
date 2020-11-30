<?php

namespace EinsUndEins\SchemaOrgMailBody\Model;

interface ParcelDeliveryInterface extends OrderInterface
{
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
