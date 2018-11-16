<?php declare(strict_types=1);

namespace Invia\Tests\CMI;

use Invia\CMI\RoomRequest;
use PHPUnit\Framework\TestCase;

/**
 * Class RoomRequestTest
 *
 * @coversDefaultClass \Invia\CMI\RoomRequest
 */
class RoomRequestTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new RoomRequest();

        $uuid = 'e39e92c3-dd09-4430-85d6-9601e9a86411';
        $this->assertEquals($instance, $instance->setHotelUUID($uuid));
        $this->assertEquals($uuid, $instance->getHotelUUID());
    }
}
