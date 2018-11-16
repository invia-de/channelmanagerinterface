<?php declare(strict_types=1);

namespace Invia\Tests\CMI;

use Invia\CMI\CMIError;
use Invia\CMI\CMIException;
use PHPUnit\Framework\TestCase;

/**
 * Class InterfaceExceptionTest
 *
 * @coversDefaultClass \Invia\CMI\CMIException
 */
class CMIExceptionTest extends TestCase
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
        $errors  = [$this->createMock(CMIError::class)];

        $instance = new CMIException($message, $code, $errors);

        $this->assertEquals($message, $instance->getMessage());
        $this->assertEquals($code, $instance->getCode());
        $this->assertEquals($errors, $instance->getErrors());
    }
}
