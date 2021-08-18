<?php

namespace Astaroth\VkKeyboard\Contracts\Template\Carousel\Type;

use Astaroth\VkKeyboard\Object\Template\Carousel\Type\Basic;

interface FactoryInterface
{
    public function basic(callable $callback): Basic;
}