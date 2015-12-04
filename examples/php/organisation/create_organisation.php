<?php

$request = new HttpRequest();
$request->setUrl('https://exenzo.nl/api/v1/organisation');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
    'cache-control' => 'no-cache',
    'content-type' => 'application/json',
    'x-authorization' => 'ORGANISATION_API_TOKEN'
));

$request->setBody('{
    "name" : "Test organisatie",
    "image" : "/9j/2wCEAAgGBgcGB....ace5r0qMf3dzx8S252ZgUlFJVnOLRRSUAf//Z"
}');

try {
    $response = $request->send();

    echo $response->getBody();
} catch (HttpException $ex) {
    echo $ex;
}