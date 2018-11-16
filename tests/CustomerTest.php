<?php declare(strict_types=1);
namespace Invia\Tests\CMI;

use Invia\CMI\ConstantsInterface;
use Invia\CMI\Customer;
use PHPUnit\Framework\TestCase;

/**
 * Class CustomerTest
 *
 * @coversDefaultClass \Invia\CMI\Customer
 */
class CustomerTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new Customer();

        $gender = ConstantsInterface::GENDER_MALE;
        $this->assertEquals($instance, $instance->setGender($gender));
        $this->assertEquals($gender, $instance->getGender());

        $firstName = 'lorem';
        $this->assertEquals($instance, $instance->setFirstName($firstName));
        $this->assertEquals($firstName, $instance->getFirstName());

        $lastName = 'ipsum';
        $this->assertEquals($instance, $instance->setLastName($lastName));
        $this->assertEquals($lastName, $instance->getLastName());

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
        $this->assertEquals($instance, $instance->setPhone(null));
        $this->assertNull($instance->getPhone());
    }
}
