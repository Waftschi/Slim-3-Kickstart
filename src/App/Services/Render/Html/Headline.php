<?php

namespace Iscape\App\Services\Render\Html;

use Iscape\App\Services\Render\Text as BaseText;

/**
 * Class Text
 *
 * Text is a concrete text for HTML rendering
 */
class Headline extends BaseText
{
    /**
     * some crude rendering from HTML output
     *
     * @return string
     */
    public function render()
    {
        return '<h1>' . htmlspecialchars($this->text) . '</h1>';
    }
}
