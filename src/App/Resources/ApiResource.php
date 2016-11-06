<?php


namespace Iscape\App\Resources;
use Iscape\App\Manager\ApiManager;
use Iscape\App\Services\Render\RenderService;

/**
 * Created by PhpStorm.
 * User: waftschi
 * Date: 04.11.2016
 * Time: 19:36
 */
class ApiResource
{
    /**
     * @var ApiManager
     */
    private $apiManager;

    /**
     * @var RenderService
     */
    private $renderService;


    public function __construct(ApiManager $apiManager, RenderService $renderService)
    {
        $this->apiManager = $apiManager;
        $this->renderService = $renderService;
    }

    /**
     * @param $type
     * @return string
     */
    public function getResponse($type, $responseType) {
        $service = $this->apiManager->getApiService($type);
        $result =  $service->getResult();

        return $this->renderService->render($result, $responseType);
    }

}