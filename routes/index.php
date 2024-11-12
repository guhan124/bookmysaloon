<?php

// Load Composer's autoloader
require __DIR__.'/vendor/autoload.php';

// Bootstrap the Laravel application
$app = require_once __DIR__.'/bootstrap/app.php';

// Create an HTTP kernel instance
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Capture the incoming request
$request = Illuminate\Http\Request::capture();

// Handle the request and generate a response
$response = $kernel->handle($request);

// Send the response back to the browser
$response->send();

// Terminate the request
$kernel->terminate($request, $response);
