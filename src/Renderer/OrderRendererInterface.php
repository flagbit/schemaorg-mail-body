<?php

namespace Renderer;

use Model\OrderInterface;

interface OrderRendererInterface
{
    /**
     * @param OrderInterface $order
     *
     * @return string
     */
    public function render(OrderInterface $order): string;
}
