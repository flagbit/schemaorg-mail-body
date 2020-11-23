<?php

namespace Renderer;

use Model\ParcelDeliveryInterface;

class ParcelDeliveryRenderer extends AbstractOrderRenderer implements RendererInterface
{
    /** @var ParcelDeliveryInterface $parcelDelivery */
    private $parcelDelivery;

    /**
     * ParcelDeliveryRenderer constructor.
     *
     * @param ParcelDeliveryInterface $parcelDelivery
     */
    public function __construct(ParcelDeliveryInterface $parcelDelivery)
    {
        $this->parcelDelivery = $parcelDelivery;
    }

    /**
     * @inheritDoc
     */
    public function render(): string
    {
        $schemaOrgUrl          = self::SCHEMA_ORG_URL;
        $carrierContent        = $this->renderCarrierContent($this->parcelDelivery);
        $trackingNumberContent = $this->renderTrackingNumberContent($this->parcelDelivery);
        $merchantContent       = $this->renderMerchantContent($this->parcelDelivery);
        $orderNumberContent    = $this->renderOrderNumberContent($this->parcelDelivery);
        $orderStatusContent    = $this->renderOrderStatusContent($this->parcelDelivery);

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
