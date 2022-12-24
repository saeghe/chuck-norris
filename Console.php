<?php

use Saeghe\ChuckNorris\Response;
use Saeghe\ChuckNorris\Request;
use function Saeghe\ChuckNorris\Api\get;

$request = new Request();
$response = new Response(get($request->url()));

echo $response->joke();
