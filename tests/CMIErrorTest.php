<?php declare(strict_types=1);

namespace Invia\Tests\CMI;

use Invia\CMI\CMIError;
use PHPUnit\Framework\TestCase;

/**
 * Class InterfaceErrorTest
 *
 * @coversDefaultClass \Invia\CMI\CMIError
 */
class CMIErrorTest extends TestCase
{
    /**
     * @covers ::<public>
     */
    public function testSetGet(): void
    {
        $instance = new CMIError();

        $code = 123;
        $this->assertEquals($instance, $instance->setCode($code));
        $this->assertEquals($code, $instance->getCode());

        $message = 'lorem ipsum';
        $this->assertEquals($instance, $instance->setMessage($message));
        $this->assertEquals($message, $instance->getMessage());
    }
}
