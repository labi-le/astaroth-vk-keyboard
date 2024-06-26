<?php

namespace Astaroth\VkKeyboard\Contracts\Template\Carousel\Element;

use Astaroth\VkKeyboard\Object\Template\Carousel\Element;

interface FactoryInterface
{
    public function openLink(
        string $link,
        array $buttons,
        ?string $title = null,
        ?string $description = null,
        ?string $photoId = null
    ): Element\OpenLink;

    public function openPhoto(
        array $buttons,
        ?string $title = null,
        ?string $description = null,
        ?string $photoId = null
    ): Element\OpenPhoto;
}