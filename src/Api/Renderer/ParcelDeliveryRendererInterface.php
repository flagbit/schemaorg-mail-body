<?php

namespace Api\Order;

use Api\Model\ParcelDeliveryInterface;

interface ParcelDeliveryRendererInterface
{
    /**
     * @param ParcelDeliveryInterface $parcelDelivery
     *
     * @return string
     */
    public function render(ParcelDeliveryInterface $parcelDelivery): string;
}
