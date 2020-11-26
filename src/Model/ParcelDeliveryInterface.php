<?php

namespace EinsUndEins\SchemaOrgMailBody\Model;

interface ParcelDeliveryInterface extends AbstractOrderInterface
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
