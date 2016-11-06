<?php

namespace Iscape\App\Services\Render\Html;

use Iscape\App\Services\Render\Picture as BasePicture;

/**
 * Class Picture
 *
 * Picture is a concrete image for HTML rendering
 */
class Picture extends BasePicture
{
    /**
     * some crude rendering from HTML output
     *
     * @return string
     */
    public function render()
    {
        return sprintf('<img src="%s" title="%s"/>', $this->path, $this->name);
    }
}
