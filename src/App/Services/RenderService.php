<?php
/**
 * Created by PhpStorm.
 * User: waftschi
 * Date: 04.11.2016
 * Time: 20:19
 */

namespace Iscape\App\Services;

use Iscape\App\Services\Render\HtmlFactory;
use Iscape\App\Services\Render\JsonFactory;
use Iscape\App\Services\Render\RawFactory;

class RenderService
{

    /**
     * @var HtmlFactory
     */
    private $htmlFactory;

    /**
     * @var JsonFactory
     */
    private $jsonFactory;

    /**
     * @var JsonFactory
     */
    private $rawFactory;


    /**
     * RenderService constructor.
     */
    public function __construct(HtmlFactory $htmlFactory, JsonFactory $jsonFactory, RawFactory $rawFactory)
    {
        $this->htmlFactory = $htmlFactory;
        $this->jsonFactory = $jsonFactory;
        $this->rawFactory = $rawFactory;
    }


    /**
     * @param $result
     * @return string
     */
    public function render($result, $type)
    {

        switch ($type) {
            case 'html-headline':
                $result = $this->htmlFactory->createHeadline($result);
                break;
            case 'json':
                $result = $this->jsonFactory->createText($result);
                break;
            case 'raw':
                $result = $this->rawFactory->createText($result);
                break;
        }

        try {
            return $result->render();
        } catch (\Exception $e) {
            return $e->getTraceAsString();
        }
    }
}