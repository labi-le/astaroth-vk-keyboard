<?php

namespace Test\Object\Keyboard;

use PHPUnit\Framework\MockObject\MockObject;
use Astaroth\VkKeyboard\Object as VkObject;
use Astaroth\VkKeyboard\Contracts;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    /**
     * @var \Astaroth\VkKeyboard\Object\Keyboard\Converter
     */
    private $converter;

    /**
     * @var Contracts\Keyboard\Type\FactoryInterface|MockObject
     */
    private $factory;

    public function setUp(): void
    {
        $this->factory   = $this->createMock(Contracts\Keyboard\Type\FactoryInterface::class);
        $this->converter = new \Astaroth\VkKeyboard\Object\Keyboard\Converter($this->factory);
    }

    public function testInline()
    {
        $inline = $this->createMock(\Astaroth\VkKeyboard\Object\Keyboard\Type\Inline::class);
        $this->factory
            ->expects($this->once())
            ->method('inline')
            ->willReturn($inline);
        $inline
            ->expects($this->once())
            ->method('convert');

        $this->converter->inline(function (Contracts\Keyboard\Button\FactoryInterface $factory) {
            return [
                [
                    $factory->text('::test::', [])
                ]
            ];
        });
    }

    public function testBasic()
    {
        $basic = $this->createMock(\Astaroth\VkKeyboard\Object\Keyboard\Type\Basic::class);
        $this->factory
            ->expects($this->once())
            ->method('basic')
            ->willReturn($basic);
        $basic
            ->expects($this->once())
            ->method('convert');

        $this->converter->basic(function () {
            return [[]];
        });
    }
}
