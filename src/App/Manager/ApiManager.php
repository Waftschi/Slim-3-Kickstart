<?php
/**
 * Created by PhpStorm.
 * User: waftschi
 * Date: 04.11.2016
 * Time: 20:24
 */

namespace Iscape\App\Manager;

use Iscape\App\Services\Api\ApiServiceFactory;

class ApiManager
{

    /**
     * @var ApiServiceFactory
     */
    private $factory;

    /**
     * DIManager constructor.
     */
    public function __construct(ApiServiceFactory $factory)
    {
        $this->factory = $factory;
    }


    /**
     * @param $name
     * @return \Iscape\App\Services\Api\ApiServiceDefault|\Iscape\App\Services\Api\ApiServiceMaeh|\Iscape\App\Services\Api\ApiServiceMuh
     */
    public function getApiService($name)
    {
        return $this->factory->createApiService($name);
    }


}