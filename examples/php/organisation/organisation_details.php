<?php

$request = new HttpRequest();
$request->setUrl('http://exenzo-nl.saas/api/v1/organisation/0nz5d3LV');
$request->setMethod(HTTP_METH_GET);

$request->setHeaders(array(
    'cache-control' => 'no-cache',
    'content-type' => 'application/json',
    'x-authorization' => 'ORGANISATION_API_TOKEN'
));

try {
    $response = $request->send();

    echo $response->getBody();
} catch (HttpException $ex) {
    echo $ex;
}