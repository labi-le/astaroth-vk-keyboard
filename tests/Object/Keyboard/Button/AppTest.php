<?php

namespace Test\Object\Keyboard\Button;

use Astaroth\VkKeyboard\Object\Keyboard\Button\AbstractButton;
use Astaroth\VkKeyboard\Object\Keyboard\Button\App;

class AppTest extends AbstractButtonTest
{
    protected function getButtonWithNullableFields(): AbstractButton
    {
        return new App('', 0, '', '');
    }

    protected function getConvertedToJsonButtonFileName(): string
    {
        return 'app.json';
    }
}
