<?php

namespace Astaroth\VkKeyboard\Contracts\Factory;

interface TemplateInterface
{
    public function getCarouselFactory(): \Astaroth\VkKeyboard\Contracts\Factory\Template\CarouselInterface;
}