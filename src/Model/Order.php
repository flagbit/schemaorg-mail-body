<?php

namespace EinsUndEins\SchemaOrgMailBody\Model;

use InvalidArgumentException;

class Order extends AbstractOrder implements OrderInterface
{
    /**
     * Order constructor.
     *
     * @param string $orderNumber
     * @param string $orderStatus
     * @param string $shopName
     *
     * @throws InvalidArgumentException
     */
    public function __construct(string $orderNumber, string $orderStatus, string $shopName)
    {
        $this->setOrderStatus($orderStatus)
            ->setOrderNumber($orderNumber)
            ->setShopName($shopName);
    }
}
