<?php

namespace Test\Object\Keyboard\Button;

use Astaroth\VkKeyboard\Object\Keyboard\Button\AbstractButton;
use Astaroth\VkKeyboard\Object\Keyboard\Button\Location;

class LocationTest extends AbstractButtonTest
{
    protected function getButtonWithNullableFields(): AbstractButton
    {
        return new Location([]);
    }

    protected function getConvertedToJsonButtonFileName(): string
    {
        return 'location.json';
    }
}
