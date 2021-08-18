<?php

namespace Astaroth\VkKeyboard\Contracts\Factory;

use Astaroth\VkKeyboard\Contracts\Keyboard;

interface KeyboardInterface
{
    public function getTypeFactory(): Keyboard\Type\FactoryInterface;
    public function getButtonFactory(): Keyboard\Button\FactoryInterface;
}