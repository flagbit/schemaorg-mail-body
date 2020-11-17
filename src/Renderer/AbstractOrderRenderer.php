<?php

namespace Renderer;

use Api\Model\AbstractOrderInterface;

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

        return <<<STRING
<meta itemprop="orderNumber" content="$number"/>
STRING;
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
        $schemaOrgUrl = self::SCHEMA_ORG_URL;
        $status       = $abstractOrder->getOrderStatus();

        return <<<STRING
<link itemprop="orderStatus" href="$schemaOrgUrl/$status"/>
STRING;
    }
}
