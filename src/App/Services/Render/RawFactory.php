<?php

namespace Iscape\App\Services\Render;

/**
 * Class RawFactory
 * @package Iscape\App\Services\Render
 */
class RawFactory extends AbstractRenderFactory
{

    /**
     * Creates a picture component
     *
     * @param string $path
     * @param string $name
     *
     * @return Raw\Picture|Picture
     */
    public function createPicture($path, $name = '')
    {
        return new Raw\Picture($path, $name);
    }

    /**
     * Creates a text component
     *
     * @param string $content
     *
     * @return Raw\Text|Text
     */
    public function createText($content)
    {
        return new Raw\Text($content);
    }
}
