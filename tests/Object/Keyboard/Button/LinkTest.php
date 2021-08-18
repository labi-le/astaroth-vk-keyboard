<?php

namespace Test\Object\Keyboard\Button;

use Astaroth\VkKeyboard\Object\Keyboard\Button\AbstractButton;
use Astaroth\VkKeyboard\Object\Keyboard\Button\Link;

class LinkTest extends AbstractButtonTest
{
    protected function getButtonWithNullableFields(): AbstractButton
    {
        return new Link('', '');
    }

    protected function getConvertedToJsonButtonFileName(): string
    {
        return 'link.json';
    }

}
