<?php

namespace Invia\Tests\CMI;

use Invia\CMI\DailyPrice;
use PHPUnit\Framework\TestCase;

/**
 * Class DailyPriceTest
 *
 * @coversDefaultClass \Invia\CMI\DailyPrice
 */
class DailyPriceTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new DailyPrice();

        $date = new \DateTimeImmutable();
        $this->assertEquals($instance, $instance->setDate($date));
        $this->assertEquals($date, $instance->getDate());

        $price = 12.34;
        $this->assertEquals($instance, $instance->setPrice($price));
        $this->assertEquals($price, $instance->getPrice());
    }
}
