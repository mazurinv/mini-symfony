<?php

declare(strict_types=1);

require './vendor/autoload.php';

use App\App;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;

Debug::enable();

$request = new Request();

$kernel = new App();
$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);