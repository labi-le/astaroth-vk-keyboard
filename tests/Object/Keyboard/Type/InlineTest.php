<?php

namespace Test\Object\Keyboard\Type;

use Astaroth\VkKeyboard\Object\Keyboard\Type\AbstractType;
use Astaroth\VkKeyboard\Object\Keyboard\Type\Inline;

class InlineTest extends AbstractTypeTest
{
    protected function getTypeWithNullableFields(): AbstractType
    {
        return new Inline([]);
    }

    protected function getConvertedToJsonTypeFileName(): string
    {
        return 'inline.json';
    }
}
