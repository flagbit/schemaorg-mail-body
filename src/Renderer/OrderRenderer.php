<?php

namespace Renderer;

use Model\OrderInterface;

class OrderRenderer extends AbstractOrderRenderer implements OrderRendererInterface
{
    /**
     * @inheritDoc
     */
    public function render(OrderInterface $order): string
    {
        $schemaOrgUrl       = self::SCHEMA_ORG_URL;
        $merchantContent    = $this->renderMerchantContent($order);
        $orderNumberContent = $this->renderOrderNumberContent($order);
        $orderStatusContent = $this->renderOrderStatusContent($order);

        return <<<STRING
<div itemscope itemtype="$schemaOrgUrl/Order">
    $merchantContent
    $orderNumberContent
    $orderStatusContent
STRING;
    }
}
