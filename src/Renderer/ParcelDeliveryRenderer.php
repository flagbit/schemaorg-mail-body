<?php

namespace Renderer;

use Model\ParcelDeliveryInterface;

class ParcelDeliveryRenderer extends AbstractOrderRenderer implements ParcelDeliveryRendererInterface
{
    /**
     * @inheritDoc
     */
    public function render(ParcelDeliveryInterface $parcelDelivery): string
    {
        $schemaOrgUrl          = self::SCHEMA_ORG_URL;
        $carrierContent        = $this->renderCarrierContent($parcelDelivery);
        $trackingNumberContent = $this->renderTrackingNumberContent($parcelDelivery);
        $merchantContent       = $this->renderMerchantContent($parcelDelivery);
        $orderNumberContent    = $this->renderOrderNumberContent($parcelDelivery);
        $orderStatusContent    = $this->renderOrderStatusContent($parcelDelivery);

        return <<<STRING
<div itemscope itemtype="$schemaOrgUrl/ParcelDelivery">
    $carrierContent
    $trackingNumberContent
    <div itemprop="partOfOrder" itemscope itemtype="$schemaOrgUrl/Order">
        $merchantContent
    </div>
    $orderNumberContent
    $orderStatusContent
</div>
STRING;
    }

    /**
     * Render carrier content
     *
     * @param ParcelDeliveryInterface $parcelDelivery
     *
     * @return string
     */
    private function renderCarrierContent(ParcelDeliveryInterface $parcelDelivery): string
    {
        $schemaOrgUrl = self::SCHEMA_ORG_URL;
        $carrierName  = $parcelDelivery->getDeliveryName();

        return <<<STRING
<div itemprop="carrier" itemscope itemtype="$schemaOrgUrl/Organization">
    <meta itemprop="name" content="$carrierName"/>
</div>
STRING;
    }

    /**
     * Render tracking number content
     *
     * @param ParcelDeliveryInterface $parcelDelivery
     *
     * @return string
     */
    private function renderTrackingNumberContent(ParcelDeliveryInterface $parcelDelivery): string
    {
        return sprintf('<meta itemprop="trackingNumber" content="%s"/>', $parcelDelivery->getTrackingNumber());
    }
}
