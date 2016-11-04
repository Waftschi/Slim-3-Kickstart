<?php

namespace Iscape\App\Services\Api;

/**
 * Created by PhpStorm.
 * User: waftschi
 * Date: 04.11.2016
 * Time: 19:34
 */
class ApiServiceFactory
{

    /**
     * @param $type
     * @return ApiServiceDefault|ApiServiceMaeh|ApiServiceMuh
     */
    public function createApiService($type)
    {
        switch ($type) {
            case 'muh':
                return new ApiServiceMuh();
                break;
            case 'maeh':
                return new ApiServiceMaeh();
                break;
        }

        return new ApiServiceDefault();
    }
}