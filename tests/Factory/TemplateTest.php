<?php

namespace Test\Factory;

use PHPUnit\Framework\MockObject\MockObject;
use Astaroth\VkKeyboard\Contracts\Factory\TemplateInterface;
use PHPUnit\Framework\TestCase;
use Astaroth\VkKeyboard\Contracts\Keyboard\Button\FactoryInterface;
use Astaroth\VkKeyboard\Factory\Template;
use Astaroth\VkKeyboard\Factory\Template\Carousel;

class TemplateTest extends TestCase
{
    /**
     * @var TemplateInterface
     */
    private $template;

    /**
     * @var FactoryInterface|MockObject
     */
    private $buttonFactory;

    public function setUp(): void
    {
        $this->buttonFactory = $this->createMock(FactoryInterface::class);
        $this->template      = new Template($this->buttonFactory);
    }

    public function testGetCarouselFactory()
    {
        $carouselFactory = $this->template->getCarouselFactory();
        $this->assertSame($carouselFactory, $this->template->getCarouselFactory());
        $this->assertInstanceOf(Carousel::class, $carouselFactory);
    }
}
