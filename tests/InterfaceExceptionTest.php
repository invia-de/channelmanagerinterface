<?php

namespace Invia\Tests\CMI;

use Invia\CMI\InterfaceError;
use Invia\CMI\InterfaceException;
use PHPUnit\Framework\TestCase;

/**
 * Class InterfaceExceptionTest
 *
 * @coversDefaultClass \Invia\CMI\InterfaceException
 */
class InterfaceExceptionTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     * @covers ::getErrors
     */
    public function test__construct(): void
    {
        $message = 'lorem ipsum';
        $code    = 123;
        $errors  = [$this->createMock(InterfaceError::class)];

        $instance = new InterfaceException($message, $code, $errors);

        $this->assertEquals($message, $instance->getMessage());
        $this->assertEquals($code, $instance->getCode());
        $this->assertEquals($errors, $instance->getErrors());
    }
}
