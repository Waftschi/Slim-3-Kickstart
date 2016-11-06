<?php

namespace Iscape\App\Services\Render;

/**
 * Class JsonFactory
 *
 * JsonFactory is a factory for creating a family of JSON component
 * (example for ajax)
 */
class RawFactory extends AbstractRenderFactory
{

    /**
     * Creates a picture component
     *
     * @param string $path
     * @param string $name
     *
     * @return Json\Picture|Picture
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
     * @return Json\Text|Text
     */
    public function createText($content)
    {
        return new Raw\Text($content);
    }
}
