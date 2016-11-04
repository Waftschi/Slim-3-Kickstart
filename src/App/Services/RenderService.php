<?php
/**
 * Created by PhpStorm.
 * User: waftschi
 * Date: 04.11.2016
 * Time: 20:19
 */

namespace Iscape\App\Services;


class RenderService
{


    /**
     * @param $result
     * @return string
     */
    public function render($result)
    {
        return  '<h1>' . $result . '<h2>';
    }
}