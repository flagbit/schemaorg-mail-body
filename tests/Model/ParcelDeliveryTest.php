<?php

namespace EinsUndEins\SchemaOrgMailBody\Tests\Model;

use EinsUndEins\SchemaOrgMailBody\Model\ParcelDelivery;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ParcelDeliveryTest extends TestCase
{
    public function testCannotBeCreatedWithInvalidOrderStatus(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new ParcelDelivery(
            'delivery',
            'tracking',
            'number',
            'invalid',
            'shop.com'
        );
    }
}
