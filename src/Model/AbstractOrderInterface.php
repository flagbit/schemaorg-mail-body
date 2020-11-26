<?php

namespace EinsUndEins\SchemaOrgMailBody\Model;

use InvalidArgumentException;

interface AbstractOrderInterface
{
    public const POSSIBLE_ORDER_STATUS = [
        'OrderCancelled',
        'OrderDelivered',
        'OrderInTransit',
        'OrderPaymentDue',
        'OrderPickupAvailable',
        'OrderProblem',
        'OrderProcessing',
        'OrderReturned',
    ];

    /**
     * Get order number
     *
     * @return string
     */
    public function getOrderNumber(): string;

    /**
     * Get order status
     *
     * @return string
     */
    public function getOrderStatus(): string;

    /**
     * Get shop name
     *
     * @return string
     */
    public function getShopName(): string;
}
