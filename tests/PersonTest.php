<?php

namespace Invia\Tests\CMI;

use Invia\CMI\ConstantsInterface;
use Invia\CMI\Person;
use PHPUnit\Framework\TestCase;

/**
 * Class PersonTest
 *
 * @coversDefaultClass \Invia\CMI\Person
 */
class PersonTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet() : void
    {
        $instance = new Person();

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
        $this->assertNull($instance->getAge());
        $this->assertEquals($instance, $instance->setAge($age));
        $this->assertEquals($age, $instance->getAge());
    }
}
