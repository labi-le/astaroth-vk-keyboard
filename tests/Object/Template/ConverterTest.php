<?php

namespace Test\Object\Template;

use Astaroth\VkKeyboard\Object\Template\Converter;
use PHPUnit\Framework\TestCase;
use Astaroth\VkKeyboard\Object\Template\Carousel;
use Astaroth\VkKeyboard\Object\Keyboard;

class ConverterTest extends TestCase
{
    /**
     * @var Converter
     */
    private $converter;

    public function setUp(): void
    {
        $this->converter = new Converter();
    }

    public function testCarousel()
    {
        $elementFactory = new \Astaroth\VkKeyboard\Object\Template\Carousel\Element\Factory();
        $buttonFactory  = new \Astaroth\VkKeyboard\Object\Keyboard\Button\Factory();
        $typeFactory = new \Astaroth\VkKeyboard\Object\Template\Carousel\Type\Factory($elementFactory, $buttonFactory);
        $this->assertEquals(new Carousel\Converter($typeFactory), $this->converter->carousel($typeFactory));
    }
}
