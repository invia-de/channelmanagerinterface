<?php
declare(strict_types=1);

namespace Invia\Tests\CMI;

use Invia\CMI\ExtraOccupancy;
use Invia\CMI\Room;
use PHPUnit\Framework\TestCase;

/**
 * Class RoomTest
 *
 * @coversDefaultClass \Invia\CMI\Room
 */
class RoomTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new Room();

        $uuid = '1dad34b4-19e9-434c-b969-48d53f84ebfd';
        $this->assertEquals($instance, $instance->setUUID($uuid));
        $this->assertEquals($uuid, $instance->getUUID());

        $name = 'lorem ipsum';
        $this->assertEquals($instance, $instance->setName($name));
        $this->assertEquals($name, $instance->getName());

        $count = 1;
        $this->assertEquals($instance, $instance->setCount($count));
        $this->assertEquals($count, $instance->getCount());

        $defaultOccupancy = 2;
        $this->assertEquals($instance, $instance->setDefaultOccupancy($defaultOccupancy));
        $this->assertEquals($defaultOccupancy, $instance->getDefaultOccupancy());

        $extraOccupancies = [new ExtraOccupancy()];
        $this->assertEquals($instance, $instance->setExtraOccupancies($extraOccupancies));
        $this->assertEquals($extraOccupancies, $instance->getExtraOccupancies());
    }
}
