<?php

namespace EinsUndEins\SchemaOrgMailBody\Renderer;

use EinsUndEins\SchemaOrgMailBody\Model\AbstractOrderInterface;

abstract class AbstractOrderRenderer
{
    protected const SCHEMA_ORG_URL = 'http://schema.org';

    /**
     * Render organization content
     *
     * @param AbstractOrderInterface $abstractOrder
     *
     * @return string
     */
    protected function renderMerchantContent(AbstractOrderInterface $abstractOrder): string
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
     * @param AbstractOrderInterface $abstractOrder
     *
     * @return string
     */
    protected function renderOrderNumberContent(AbstractOrderInterface $abstractOrder): string
    {
        $number = $abstractOrder->getOrderNumber();

        return sprintf('<meta itemprop="orderNumber" content="%s"/>', $number);
    }

    /**
     * Render order status content
     *
     * @param AbstractOrderInterface $abstractOrder
     *
     * @return string
     */
    protected function renderOrderStatusContent(AbstractOrderInterface $abstractOrder): string
    {
        return sprintf(
            '<link itemprop="orderStatus" href="%s/%s"/>',
            self::SCHEMA_ORG_URL,
            $abstractOrder->getOrderStatus()
        );
    }
}
