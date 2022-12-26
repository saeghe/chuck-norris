<?php

use Saeghe\ChuckNorris\Response;
use Saeghe\ChuckNorris\Request;
use function Saeghe\ChuckNorris\Api\get;
use function Saeghe\Cli\IO\Write\line;

$request = new Request();
$response = new Response(get($request->url()));

line($response->joke());
