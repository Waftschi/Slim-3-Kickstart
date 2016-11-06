<?php
/**
 * Created by PhpStorm.
 * User: waftschi
 * Date: 04.11.2016
 * Time: 20:19
 */

namespace Iscape\App\Services\Render;


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
     * @var RawFactory
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

        if ($result instanceof MediaInterface) {
            return $result->render();
        }

        return null;
    }
}