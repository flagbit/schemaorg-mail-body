<?php

namespace EinsUndEins\SchemaOrgMailBody\Model;

abstract class AbstractOrder implements OrderInterface
{
    /** @var string $orderNumber */
    protected $orderNumber;
    /** @var string $orderStatus */
    protected $orderStatus;
    /** @var string $shopName */
    protected $shopName;

    /**
     * @inheritDoc
     */
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /**
     * @inheritDoc
     */
    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }

    /**
     * @inheritDoc
     */
    public function getShopName(): string
    {
        return $this->shopName;
    }
}
