<?php

namespace Renderer;

use Model\ParcelDeliveryInterface;

interface ParcelDeliveryRendererInterface
{
    /**
     * @param ParcelDeliveryInterface $parcelDelivery
     *
     * @return string
     */
    public function render(ParcelDeliveryInterface $parcelDelivery): string;
}
