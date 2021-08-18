<?php

namespace Test\Factory;

use PHPUnit\Framework\MockObject\MockObject;
use Astaroth\VkKeyboard\Factory;
use PHPUnit\Framework\TestCase;
use Astaroth\VkKeyboard\Object\Keyboard;

class KeyboardTest extends TestCase
{
    public function testGetTypeFactory(): void
    {
        /** @var Factory\Keyboard|MockObject $keyboard */
        $keyboard = $this->getMockBuilder(Factory\Keyboard::class)
            ->setMethodsExcept(['getTypeFactory'])
            ->getMock();
        $keyboard
            ->expects($this->once())
            ->method('getButtonFactory');

        $typeFactory = $keyboard->getTypeFactory();
        $this->assertInstanceOf(\Astaroth\VkKeyboard\Object\Keyboard\Type\Factory::class, $typeFactory);
        $this->assertSame($typeFactory, $keyboard->getTypeFactory());
    }

    public function testGetButtonFactory(): void
    {
        $keyboard = new Factory\Keyboard();
        $buttonFactory = $keyboard->getButtonFactory();
        $this->assertInstanceOf(\Astaroth\VkKeyboard\Object\Keyboard\Button\Factory::class, $buttonFactory);
        $this->assertSame($buttonFactory, $keyboard->getButtonFactory());
    }
}
