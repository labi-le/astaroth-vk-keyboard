<?php

namespace Astaroth\VkKeyboard\Object\Keyboard\Type;

use Astaroth\VkKeyboard\Contracts\Convertible\JsonInterface;
use Astaroth\VkKeyboard\Object\Keyboard\Button\AbstractButton;

abstract class AbstractType implements JsonInterface {

    protected const KEY_BUTTONS = 'buttons';

    /**
     * @var array
     */
    protected $keyboard = [];

    /**
     * @var array
     */
    protected $buttons;

    public function convert(): string {
        $this->keyboard[self::KEY_BUTTONS] = $this->convertButtonsRecursive($this->buttons);
        return json_encode($this->keyboard, JSON_UNESCAPED_UNICODE);
    }

    private function convertButtonsRecursive(array $buttons): array {
        return array_map(function ($button): array {
            if ($button instanceof AbstractButton) {
                return $button->convert();
            }

            if (is_array($button)) {
                return $this->convertButtonsRecursive($button);
            }

            return [];
        }, $buttons);
    }

}