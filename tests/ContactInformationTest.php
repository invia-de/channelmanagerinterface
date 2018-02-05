<?php

namespace Invia\Tests\CMI;

use Invia\CMI\ContactInformation;
use PHPUnit\Framework\TestCase;

/**
 * Class ContactInformationTest
 *
 * @coversDefaultClass \Invia\CMI\ContactInformation
 */
class ContactInformationTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new ContactInformation();

        $streetAndNumber = 'Some Street 1a';
        $this->assertEquals($instance, $instance->setStreetAndNumber($streetAndNumber));
        $this->assertEquals($streetAndNumber, $instance->getStreetAndNumber());

        $postalCode = '01234';
        $this->assertEquals($instance, $instance->setPostalCode($postalCode));
        $this->assertEquals($postalCode, $instance->getPostalCode());

        $city = 'Sample City';
        $this->assertEquals($instance, $instance->setCity($city));
        $this->assertEquals($city, $instance->getCity());

        $country = 'DEU';
        $this->assertEquals($instance, $instance->setCountry($country));
        $this->assertEquals($country, $instance->getCountry());

        $email = 'do-not-reply@invia.de';
        $this->assertEquals($instance, $instance->setEmail($email));
        $this->assertEquals($email, $instance->getEmail());

        $phone = '01234/567890';
        $this->assertNull($instance->getPhone());
        $this->assertEquals($instance, $instance->setPhone($phone));
        $this->assertEquals($phone, $instance->getPhone());
        $this->assertEquals($instance, $instance->setPhone());
        $this->assertNull($instance->getPhone());
    }
}
