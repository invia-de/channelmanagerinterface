<?php

namespace Invia\Tests\CMI;

use Invia\CMI\ConstantsInterface;
use Invia\CMI\Guest;
use PHPUnit\Framework\TestCase;

/**
 * Class GuestTest
 *
 * @coversDefaultClass \Invia\CMI\Guest
 */
class GuestTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new Guest();

        $gender = ConstantsInterface::GENDER_MALE;
        $this->assertEquals($instance, $instance->setGender($gender));
        $this->assertEquals($gender, $instance->getGender());

        $firstName = 'lorem';
        $this->assertEquals($instance, $instance->setFirstName($firstName));
        $this->assertEquals($firstName, $instance->getFirstName());

        $lastName = 'ipsum';
        $this->assertEquals($instance, $instance->setLastName($lastName));
        $this->assertEquals($lastName, $instance->getLastName());

        $age = 42;
        $this->assertEquals($instance, $instance->setAge($age));
        $this->assertEquals($age, $instance->getAge());
    }
}
