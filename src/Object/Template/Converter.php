<?php

namespace Astaroth\VkKeyboard\Object\Template;

use Astaroth\VkKeyboard\Contracts\Template\Carousel\Type\FactoryInterface;

class Converter
{
    public function carousel(FactoryInterface $factory): Astaroth\VkKeyboard\Object\Template\Carousel\Converter
    {
        return new Astaroth\VkKeyboard\Object\Template\Carousel\Converter($factory);
    }
}