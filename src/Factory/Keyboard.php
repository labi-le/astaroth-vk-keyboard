<?php

namespace Astaroth\VkKeyboard\Factory;

use Astaroth\VkKeyboard\Contracts;
use Astaroth\VkKeyboard\Object as VkObject;

class Keyboard implements Contracts\Factory\KeyboardInterface
{
    /**
     * @var Contracts\Keyboard\Type\FactoryInterface
     */
    private $typeFactory;

    /**
     * @var Contracts\Keyboard\Button\FactoryInterface
     */
    private $buttonFactory;

    public function getTypeFactory(): Contracts\Keyboard\Type\FactoryInterface
    {
        if ($this->typeFactory === null) {
            $this->typeFactory = new \Astaroth\VkKeyboard\Object\Keyboard\Type\Factory($this->getButtonFactory());
        }

        return $this->typeFactory;
    }

    public function getButtonFactory(): Contracts\Keyboard\Button\FactoryInterface
    {
        if ($this->buttonFactory === null) {
            $this->buttonFactory = new \Astaroth\VkKeyboard\Object\Keyboard\Button\Factory();
        }

        return $this->buttonFactory;
    }
}