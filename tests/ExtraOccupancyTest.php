<?php declare(strict_types=1);

namespace Invia\Tests\CMI;

use Invia\CMI\ExtraOccupancy;
use PHPUnit\Framework\TestCase;

/**
 * Class ExtraOccupancyTest
 *
 * @coversDefaultClass \Invia\CMI\ExtraOccupancy
 */
class ExtraOccupancyTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new ExtraOccupancy();

        $adults = 2;
        $this->assertEquals($instance, $instance->setAdults($adults));
        $this->assertEquals($adults, $instance->getAdults());

        $children = 1;
        $this->assertEquals($instance, $instance->setChildren($children));
        $this->assertEquals($children, $instance->getChildren());

        $infants = 0;
        $this->assertEquals($instance, $instance->setInfants($infants));
        $this->assertEquals($infants, $instance->getInfants());
    }
}
