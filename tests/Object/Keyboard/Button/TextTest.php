<?php

namespace Test\Object\Keyboard\Button;

use Astaroth\VkKeyboard\Object\Keyboard\Button;

class TextTest extends AbstractButtonTest
{
    protected function getButtonWithNullableFields(): Button\AbstractButton
    {
        return new Button\Text('', []);
    }

    protected function getConvertedToJsonButtonFileName(): string
    {
        return 'text.json';
    }
}
