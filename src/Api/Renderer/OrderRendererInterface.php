<?php

namespace Api\Order;

use Api\Model\OrderInterface;

interface OrderRendererInterface
{
    /**
     * @param OrderInterface $order
     *
     * @return string
     */
    public function render(OrderInterface $order): string;
}
