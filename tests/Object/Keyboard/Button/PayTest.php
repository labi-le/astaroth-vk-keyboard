<?php

namespace Test\Object\Keyboard\Button;

use Astaroth\VkKeyboard\Object\Keyboard\Button;

class PayTest extends AbstractButtonTest
{
    protected function getButtonWithNullableFields(): Button\AbstractButton
    {
        return new Button\Pay('');
    }

    protected function getConvertedToJsonButtonFileName(): string
    {
        return 'pay.json';
    }
}
