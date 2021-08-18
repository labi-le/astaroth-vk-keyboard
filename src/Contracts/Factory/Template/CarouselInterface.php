<?php

namespace Astaroth\VkKeyboard\Contracts\Factory\Template;

use Astaroth\VkKeyboard\Contracts\Template\Carousel;

interface CarouselInterface
{
    public function getTypeFactory(): Carousel\Type\FactoryInterface;
    public function getElementFactory(): Carousel\Element\FactoryInterface;
}