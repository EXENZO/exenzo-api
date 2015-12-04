<?php

$request = new HttpRequest();
$request->setUrl('https://exenzo.nl/api/v1/job');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
    'cache-control' => 'no-cache',
    'content-type' => 'application/json',
    'x-authorization' => 'ORGANISATION-API-TOKEN'
));

$request->setBody('{
    "name" : "Test Organisation",
    "category_id" : "OWZ8MLN2",
    "organisation_id" : "4BL3Dn1P",
    "city" : "Breda",
    "lat" : 51.052150,
    "lon" : 4.04550,
    "text" : "<p>Text<p>",
    "apply_type" : "URL",
    "apply_url" : "http://example.com",
    "description" : "description",
    "segments" : ["NEZQ8j9J", "45Z6QjOB", "dpjdEZ3R", "9enVbnWM", "eDjXOn7G", "GkLe1Lp5", "0rnaxwL8"],
    "image" : "iVBORw0KGgoAAAANSUhEUg....AElFTkSuQmCC"
}');

try {
    $response = $request->send();

    echo $response->getBody();
} catch (HttpException $ex) {
    echo $ex;
}