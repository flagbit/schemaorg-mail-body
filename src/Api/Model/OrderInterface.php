<?php

namespace Api\Model;

interface OrderInterface extends AbstractOrderInterface
{
    /**
     * @param string $orderNumber
     * @param string $orderStatus
     * @param string $shopName
     *
     * @return OrderInterface
     */
    public function __construct(string $orderNumber, string $orderStatus, string $shopName);
}
