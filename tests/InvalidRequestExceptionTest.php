<?php

namespace Invia\Tests\CMI;

use Invia\CMI\InvalidRequestException;
use PHPUnit\Framework\TestCase;

/**
 * Class InvalidRequestExceptionTest
 *
 * @coversDefaultClass \Invia\CMI\InvalidRequestException
 */
class InvalidRequestExceptionTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     * @covers ::getErrors
     *
     * @throws \ReflectionException
     */
    public function testException(): void
    {
        $errors = [
            [
                'key'     => 'lorem.ipsum',
                'message' => 'Lorem ipsum dolor sit amet.',
            ],
        ];

        $exception = new InvalidRequestException($errors);

        $this->assertEquals('The given request was invalid.', $exception->getMessage());

        $reflection = new \ReflectionProperty($exception, 'errors');
        $reflection->setAccessible(true);

        $this->assertEquals($errors, $reflection->getValue($exception));
        $this->assertEquals($errors, $exception->getErrors());
    }
}
