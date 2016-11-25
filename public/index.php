<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response as Response;

require '../vendor/autoload.php';
require '../src/App/bootstrap.php';



$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});


$app->get('/api/response/html/{apiType}', function (Request $request, Response $response) {
    $apiType = $request->getAttribute('apiType');

    /** @var \Iscape\App\Resources\ApiResource $resource*/
    $resource = $this->get('apiResource');

    $response->getBody()->write($resource->getResponse( $apiType, 'html-headline'));

    return $response;
});



$app->get('/api/response/json/{apiType}', function (Request $request, Response $response) {
    $apiType = $request->getAttribute('apiType');

    /** @var \Iscape\App\Resources\ApiResource $resource*/
    $resource = $this->get('apiResource');
    $result = $resource->getResponse($apiType, 'raw');

    $newResponse = $response->withJson($result);

    return   $newResponse;
});


$app->run();