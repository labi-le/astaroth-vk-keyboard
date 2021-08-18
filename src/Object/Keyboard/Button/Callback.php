<?php

namespace Astaroth\VkKeyboard\Object\Keyboard\Button;

class Callback extends Text
{
    protected function type(): string
    {
        return "callback";
    }
}