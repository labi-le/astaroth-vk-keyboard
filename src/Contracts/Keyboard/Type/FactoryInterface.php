<?php

namespace Astaroth\VkKeyboard\Contracts\Keyboard\Type;

use Astaroth\VkKeyboard\Object\Keyboard\Type;

interface FactoryInterface
{
    public function basic(callable $callback, bool $oneTime = true): Type\Basic;
    public function inline(callable $callback): Type\Inline;
}