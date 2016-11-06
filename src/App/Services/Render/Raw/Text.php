<?php

namespace Iscape\App\Services\Render\Raw;

use Iscape\App\Services\Render\Text as BaseText;

/**
 * Class Text
 *
 * Text is a text component with a JSON rendering
 */
class Text extends BaseText
{
    /**
     * some crude rendering from JSON output
     *
     * @return string
     */
    public function render()
    {
        return array('content' => $this->text);
    }
}
