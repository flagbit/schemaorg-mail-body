<?php declare(strict_types=1);

use Model\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testCannotBeCreatedWithInvalidOrderStatus(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Order('number', 'invalid', 'shop.com');
    }
}
