<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../src/App/bootstrap.php';


$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});


$app->get('/api/response/{type}', function (Request $request, Response $response) {
    $type = $request->getAttribute('type');

    /** @var \Iscape\App\Resources\ApiResource $resource*/
    $resource = $this->get('apiResource');
    $response->getBody()->write($resource->getResponse($type));

    //return $response;
});

$app->run();