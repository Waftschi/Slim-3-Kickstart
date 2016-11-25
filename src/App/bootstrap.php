<?php


$container = new \Slim\Container;

$container['errorHandler'] = function ($c) {
    return function ($request, $response, RuntimeException $exception) use ($c) {
        return $c['response']->withStatus(500)
            ->withHeader('Content-Type', 'text/html')
            ->write('<pre>'.$exception->getMessage().'</pre>')
            ->write('<pre>'.$exception->getLine().'</pre>')
            ->write('<pre>'.$exception->getTraceAsString().'</pre>');
    };
};

$container['renderService'] = function($c) {
    $htmlFactory =  new \Iscape\App\Services\Render\HtmlFactory();
    $jsonFactory = new \Iscape\App\Services\Render\JsonFactory();
    $rawFactory = new \Iscape\App\Services\Render\RawFactory();
    return new \Iscape\App\Services\Render\RenderService($htmlFactory, $jsonFactory, $rawFactory);
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

$app->add(function ($request, $response, $next) {

    /** @var \Iscape\App\Manager\ApiManager $manager*/
    $manager = $this->get('apiManager');



    $response->getBody()->write('BEFORE');
    $response->getBody()->write($manager->getApiService('test')->getResult());
   // echo $manager->getApiService('test')->getResult();
    $response = $next($request, $response);
    $response->getBody()->write('AFTER');

    return $response;
});


