<?php

namespace Astaroth\VkKeyboard\Object\Keyboard\Button;

use Astaroth\VkKeyboard\Contracts\Keyboard\Button\FactoryInterface;

class Factory implements FactoryInterface
{
    public function app(string $label, int $appId, string $ownerId, string $hash): App {
        return new App($label, $appId, $ownerId, $hash);
    }

    public function location(array $payload): Location {
        return new Location($payload);
    }

    public function pay(string $hash): Pay {
        return new Pay($hash);
    }

    public function text(string $label,array $payload, string $color = Text::COLOR_GREEN): Text {
        return new Text($label, $payload, $color);
    }

    public function callback(string $label,array $payload, string $color = Text::COLOR_GREEN): Text {
        return new Callback($label, $payload, $color);
    }

    public function link(string $label, string $link, array $payload): Link {
        return new Link($label, $link, $payload);
    }

}