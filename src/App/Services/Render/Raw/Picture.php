<?php

namespace Iscape\App\Services\Render\Raw;

use Iscape\App\Services\Render\Picture as BasePicture;

/**
 * Class Picture
 *
 * Picture is a concrete image for JSON rendering
 */
class Picture extends BasePicture
{
    /**
     * some crude rendering from JSON output
     *
     * @return string
     */
    public function render()
    {
        return array('title' => $this->name, 'path' => $this->path);
    }
}
