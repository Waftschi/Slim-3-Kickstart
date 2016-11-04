<?php


$container = new \Slim\Container;

$container['renderService'] = function($c) {
    return new \Iscape\App\Services\RenderService();
};

$container['apiServiceFactory'] = function($c) {
    return new \Iscape\App\Services\Api\ApiServiceFactory();
};

$container['apiManager'] = function($c) {
    return new \Iscape\App\Manager\ApiManager($c['apiServiceFactory']);
};

$container['apiResource'] = function($c) {
    return new \Iscape\App\Resources\ApiResource($c['apiManager'], $c['renderService']);
};


$app = new \Slim\App($container);

