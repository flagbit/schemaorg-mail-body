<?php

namespace Flagbit\SchemaOrgMailBody\Tests;

use Flagbit\SchemaOrgMailBody\Model\ParcelDelivery;
use PHPUnit\Framework\TestCase;
use Flagbit\SchemaOrgMailBody\Renderer\ParcelDeliveryRenderer;

class ParcelDeliveryRendererTest extends TestCase
{
    public function testRenderingOfParcelDeliveryObject(): void
    {
        $expected = <<<STRING
<div itemscope itemtype="http://schema.org/ParcelDelivery">
    <div itemprop="carrier" itemscope itemtype="http://schema.org/Organization">
    <meta itemprop="name" content="deliveryName"/>
</div>
    <meta itemprop="trackingNumber" content="trackingNumber"/>
    <div itemprop="partOfOrder" itemscope itemtype="http://schema.org/Order">
        <div itemprop="merchant" itemscope itemtype="http://schema.org/Organization">
    <meta itemprop="name" content="shop.com"/>
</div>
    </div>
    <meta itemprop="orderNumber" content="orderNumber"/>
    <link itemprop="orderStatus" href="http://schema.org/OrderReturned"/>
</div>
STRING;
        $parcelDelivery    = new ParcelDelivery(
            'deliveryName',
            'trackingNumber',
            'orderNumber',
            'OrderReturned',
            'shop.com'
        );
        $renderer = new ParcelDeliveryRenderer($parcelDelivery);

        $this->assertEquals($expected, $renderer->render());
    }
}
