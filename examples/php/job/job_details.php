<?php

$request = new HttpRequest();
$request->setUrl('https://exenzo.nl/api/v1/job/4BL3Dn1P');
$request->setMethod(HTTP_METH_GET);

$request->setHeaders(array(
    'cache-control' => 'no-cache',
    'content-type' => 'application/json',
    'x-authorization' => 'ORGANISATION-API-TOKEN'
));

try {
    $response = $request->send();

    echo $response->getBody();
} catch (HttpException $ex) {
    echo $ex;
}