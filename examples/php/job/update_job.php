<?php

$request = new HttpRequest();
$request->setUrl('https://exenzo.nl/api/v1/job/{job_id}');
$request->setMethod(HTTP_METH_PUT);

$request->setHeaders(array(
    'cache-control' => 'no-cache',
    'content-type' => 'application/json',
    'x-authorization' => 'ORGANISATION-API-TOKEN'
));

$request->setBody('{
    "name" : "Test Organisation Ltd",
    "image" : "iVBORw0KGgoAAAANSUhEUg....AElFTkSuQmCC"
}');

try {
    $response = $request->send();

    echo $response->getBody();
} catch (HttpException $ex) {
    echo $ex;
}