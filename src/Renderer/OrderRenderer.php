<?php

namespace Flagbit\SchemaOrgMailBody\Renderer;

use Flagbit\SchemaOrgMailBody\Model\OrderInterface;

class OrderRenderer extends AbstractOrderRenderer implements RendererInterface
{
    /** @var OrderInterface $order */
    private $order;

    /**
     * OrderRenderer constructor.
     *
     * @param OrderInterface $order
     */
    public function __construct(OrderInterface $order)
    {
        $this->order = $order;
    }

    /**
     * @inheritDoc
     */
    public function render(): string
    {
        $schemaOrgUrl       = self::SCHEMA_ORG_URL;
        $merchantContent    = $this->renderMerchantContent($this->order);
        $orderNumberContent = $this->renderOrderNumberContent($this->order);
        $orderStatusContent = $this->renderOrderStatusContent($this->order);

        return <<<STRING
<div itemscope itemtype="$schemaOrgUrl/Order">
    $merchantContent
    $orderNumberContent
    $orderStatusContent
</div>
STRING;
    }
}
