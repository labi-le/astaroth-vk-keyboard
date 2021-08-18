<?php

namespace Astaroth\VkKeyboard\Object\Keyboard;

use Astaroth\VkKeyboard\Contracts\Keyboard\Type\FactoryInterface;

class Converter
{
    /**
     * @var FactoryInterface
     */
    private $typeFactory;

    public function __construct(FactoryInterface $typeFactory)
    {
        $this->typeFactory = $typeFactory;
    }

    public function basic(callable $callback, bool $oneTime = true): string
    {
        return $this->typeFactory->basic($callback, $oneTime)->convert();
    }

    public function inline(callable $callback): string
    {
        return $this->typeFactory->inline($callback)->convert();
    }
}