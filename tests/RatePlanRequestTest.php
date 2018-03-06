<?php

namespace Invia\Tests\CMI;

use Invia\CMI\RatePlanRequest;
use PHPUnit\Framework\TestCase;

/**
 * Class RatePlanRequestTest
 *
 * @coversDefaultClass \Invia\CMI\RatePlanRequest
 */
class RatePlanRequestTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new RatePlanRequest();

        $uuid = '9b02ad8f-f0b4-44da-93e2-2d40a5cc1901';
        $this->assertEquals($instance, $instance->setHotelUUID($uuid));
        $this->assertEquals($uuid, $instance->getHotelUUID());
    }
}
