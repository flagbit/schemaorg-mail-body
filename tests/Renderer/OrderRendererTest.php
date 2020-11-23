<?php

namespace Flagbit\SchemaOrgMailBody\Tests;

use Flagbit\SchemaOrgMailBody\Model\Order;
use PHPUnit\Framework\TestCase;
use Flagbit\SchemaOrgMailBody\Renderer\OrderRenderer;

class OrderRendererTest extends TestCase
{
    public function testRenderingOfOrderObject(): void
    {
        $expected = <<<STRING
<div itemscope itemtype="http://schema.org/Order">
    <div itemprop="merchant" itemscope itemtype="http://schema.org/Organization">
    <meta itemprop="name" content="shop.com"/>
</div>
    <meta itemprop="orderNumber" content="orderNumber"/>
    <link itemprop="orderStatus" href="http://schema.org/OrderPickupAvailable"/>
</div>
STRING;
        $order = new Order('orderNumber', 'OrderPickupAvailable', 'shop.com');
        $renderer = new OrderRenderer($order);

        $this->assertEquals($expected, $renderer->render());
    }
}
