<?php

namespace EinsUndEins\SchemaOrgMailBody\Model;

use InvalidArgumentException;

abstract class AbstractOrder implements AbstractOrderInterface
{
    /** @var string $orderNumber */
    private $orderNumber;
    /** @var string $orderStatus */
    private $orderStatus;
    /** @var string $shopName */
    private $shopName;

    /**
     * @inheritDoc
     */
    public function setOrderNumber(string $number): AbstractOrderInterface
    {
        $this->orderNumber = $number;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setOrderStatus(string $status): AbstractOrderInterface
    {
        if (!in_array($status, self::POSSIBLE_ORDER_STATUS)) {
            throw new InvalidArgumentException('Status is not one of the possible status.');
        }
        $this->orderStatus = $status;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setShopName(string $name): AbstractOrderInterface
    {
        $this->shopName = $name;

        return $this;
    }

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
