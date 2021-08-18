<?php
/**
 * Created by PhpStorm.
 * User: n0tm
 * Date: 15.12.19
 * Time: 19:21
 */

namespace Astaroth\VkKeyboard;

class Converter
{
    /**
     * @var Contracts\FactoryInterface
     */
    private $factory;

    /**
     * @var \Astaroth\VkKeyboard\Object\Keyboard\Converter
     */
    private $keyboardConverter;

    /**
     * @var \Astaroth\VkKeyboard\Object\Template\Carousel\Converter
     */
    private $carouselConverter;

    public function __construct(Contracts\FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function keyboard(): \Astaroth\VkKeyboard\Object\Keyboard\Converter
    {
        if ($this->keyboardConverter === null) {
            $this->keyboardConverter = new \Astaroth\VkKeyboard\Object\Keyboard\Converter($this->factory->getKeyboardFactory()->getTypeFactory());
        }

        return $this->keyboardConverter;
    }

    public function carousel(): \Astaroth\VkKeyboard\Object\Template\Carousel\Converter
    {
        if ($this->carouselConverter === null) {
            $this->carouselConverter = new \Astaroth\VkKeyboard\Object\Template\Carousel\Converter(
                $this->factory->getTemplateFactory()->getCarouselFactory()->getTypeFactory()
            );
        }

        return $this->carouselConverter;
    }
}