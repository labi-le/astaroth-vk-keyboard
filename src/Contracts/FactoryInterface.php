<?php

namespace Astaroth\VkKeyboard\Contracts;

interface FactoryInterface
{
    public function getTemplateFactory(): Factory\TemplateInterface;
    public function getKeyboardFactory(): Factory\KeyboardInterface;
}