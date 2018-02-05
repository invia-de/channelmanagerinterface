<?php

namespace Invia\Tests\CMI;

use Invia\CMI\InsufficientRightsException;
use PHPUnit\Framework\TestCase;

/**
 * Class InsufficientRightsExceptionTest
 *
 * @coversDefaultClass \Invia\CMI\InsufficientRightsException
 */
class InsufficientRightsExceptionTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     */
    public function testException(): void
    {
        $exception = new InsufficientRightsException('Lorem Ipsum', '78512e41-7e06-4eb2-a7ee-24b70da5fd40');
        $message   = "The channel manager 'Lorem Ipsum' has not sufficient rights to handle property '78512e41-7e06-4eb2-a7ee-24b70da5fd40'.";

        $this->assertEquals($message, $exception->getMessage());
    }
}
