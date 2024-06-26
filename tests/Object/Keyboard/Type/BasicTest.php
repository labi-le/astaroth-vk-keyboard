<?php

namespace Test\Object\Keyboard\Type;

use Astaroth\VkKeyboard\Object\Keyboard\Type\AbstractType;
use Astaroth\VkKeyboard\Object\Keyboard\Type\Basic;

class BasicTest extends AbstractTypeTest
{
    protected function getTypeWithNullableFields(): AbstractType
    {
        return new Basic([]);
    }

    protected function getConvertedToJsonTypeFileName(): string
    {
        return 'basic.json';
    }
}
