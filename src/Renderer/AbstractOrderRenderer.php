<?php

namespace EinsUndEins\SchemaOrgMailBody\Renderer;

use EinsUndEins\SchemaOrgMailBody\Model\OrderInterface;

abstract class AbstractOrderRenderer
{
    protected const SCHEMA_ORG_URL = 'http://schema.org';

    /**
     * Render organization content
     *
     * @param OrderInterface $abstractOrder
     *
     * @return string
     */
    protected function renderMerchantContent(OrderInterface $abstractOrder): string
    {
        $name         = $abstractOrder->getShopName();
        $schemaOrgUrl = self::SCHEMA_ORG_URL;

        return <<<STRING
<div itemprop="merchant" itemscope itemtype="$schemaOrgUrl/Organization">
    <meta itemprop="name" content="$name"/>
</div>
STRING;
    }

    /**
     * Render order number content
     *
     * @param OrderInterface $abstractOrder
     *
     * @return string
     */
    protected function renderOrderNumberContent(OrderInterface $abstractOrder): string
    {
        $number = $abstractOrder->getOrderNumber();

        return sprintf('<meta itemprop="orderNumber" content="%s"/>', $number);
    }

    /**
     * Render order status content
     *
     * @param OrderInterface $abstractOrder
     *
     * @return string
     */
    protected function renderOrderStatusContent(OrderInterface $abstractOrder): string
    {
        return sprintf(
            '<link itemprop="orderStatus" href="%s/%s"/>',
            self::SCHEMA_ORG_URL,
            $abstractOrder->getOrderStatus()
        );
    }
}
