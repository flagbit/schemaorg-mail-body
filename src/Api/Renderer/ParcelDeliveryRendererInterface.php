<?php

namespace Api\Order;

use Api\Model\ParcelDeliveryInterface;

interface ParcelDeliveryRendererInterface
{
    /**
     * @param ParcelDeliveryInterface $order
     *
     * @return string
     */
    public function render(ParcelDeliveryInterface $order): string;
}
