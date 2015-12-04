<?php

$request = new HttpRequest();
$request->setUrl('https://exenzo.nl/api/v1/organisation/{organisation_id}');
$request->setMethod(HTTP_METH_PUT);

$request->setHeaders(array(
    'cache-control' => 'no-cache',
    'content-type' => 'application/json',
    'x-authorization' => 'ORGANISATION_API_TOKEN'
));

$request->setBody('{
    "name" : "Test Organisation Ltd"
}');

try {
    $response = $request->send();

    echo $response->getBody();
} catch (HttpException $ex) {
    echo $ex;
}