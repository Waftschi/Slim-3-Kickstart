<?php

namespace Iscape\App\Services\Render;

/**
 * Class HtmlFactory
 *
 * HtmlFactory is a concrete factory for HTML component
 */
class HtmlFactory extends AbstractRenderFactory
{
    /**
     * Creates a picture component
     *
     * @param string $path
     * @param string $name
     *
     * @return Html\Picture|Picture
     */
    public function createPicture($path, $name = '')
    {
        return new Html\Picture($path, $name);
    }

    /**
     * Creates a text component
     *
     * @param string $content
     *
     * @return Html\Text|Text
     */
    public function createText($content)
    {
        return new Html\Text($content);
    }


    /**
     * Creates a text component
     *
     * @param string $content
     *
     * @return Html\Text|Text
     */
    public function createHeadline($content)
    {
        return new Html\Headline($content);
    }
}
