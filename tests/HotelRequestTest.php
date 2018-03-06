<?php

namespace Invia\Tests\CMI;

use Invia\CMI\HotelRequest;
use PHPUnit\Framework\TestCase;

/**
 * Class HotelRequestTest
 *
 * @coversDefaultClass \Invia\CMI\HotelRequest
 */
class HotelRequestTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new HotelRequest();

        $hotelUUID = 'ec1c6593-241b-42f2-a3d5-abec0bc84e2e';
        $this->assertEquals($instance, $instance->setHotelUUID($hotelUUID));
        $this->assertEquals($hotelUUID, $instance->getHotelUUID());
    }
}
