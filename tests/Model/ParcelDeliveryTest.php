<?php declare(strict_types=1);

use Model\ParcelDelivery;
use PHPUnit\Framework\TestCase;

class ParcelDeliveryTest extends TestCase
{
    public function testCanBeCreatedWithValidParams(): void
    {
        $this->assertInstanceOf(
            ParcelDelivery::class,
            new ParcelDelivery(
                'delivery',
                'tracking',
                'number',
                'OrderDelivered',
                'shop.com'
            )
        );
    }

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
