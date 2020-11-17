<?php

namespace Model;

use InvalidArgumentException;

interface AbstractOrderInterface
{
    /**
     * Set order number
     *
     * @param string $number
     *
     * @return $this
     */
    public function setOrderNumber(string $number): AbstractOrderInterface;

    /**
     * Set order status
     *
     * @param string $status
     *
     * @return $this
     * @throws InvalidArgumentException
     */
    public function setOrderStatus(string $status): AbstractOrderInterface;

    /**
     * Set shop name
     *
     * @param string $name
     *
     * @return $this
     */
    public function setShopName(string $name): AbstractOrderInterface;

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
