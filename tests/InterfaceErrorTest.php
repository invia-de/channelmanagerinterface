<?php

namespace Invia\Tests\CMI;

use Invia\CMI\InterfaceError;
use PHPUnit\Framework\TestCase;

/**
 * Class InterfaceErrorTest
 *
 * @coversDefaultClass \Invia\CMI\InterfaceError
 */
class InterfaceErrorTest extends TestCase
{
    /**
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new InterfaceError();

        $code = 123;
        $this->assertEquals($instance, $instance->setCode($code));
        $this->assertEquals($code, $instance->getCode());

        $message = 'lorem ipsum';
        $this->assertEquals($instance, $instance->setMessage($message));
        $this->assertEquals($message, $instance->getMessage());
    }
}
