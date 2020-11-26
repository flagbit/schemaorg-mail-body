<?php

namespace EinsUndEins\SchemaOrgMailBody\Tests\Model;

use EinsUndEins\SchemaOrgMailBody\Model\Order;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testCannotBeCreatedWithInvalidOrderStatus(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Order('number', 'invalid', 'shop.com');
    }
}
