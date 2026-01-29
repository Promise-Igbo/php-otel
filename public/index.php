<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use Monolog\Logger;
use OpenTelemetry\API\Globals;
use OpenTelemetry\Contrib\Logs\Monolog\Handler;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Initialize OpenTelemetry Logger (SAFE)
|--------------------------------------------------------------------------
*/

$loggerProvider = Globals::loggerProvider();

$otelHandler = new Handler(
    $loggerProvider,
    Logger::INFO,
    true
);

$otelLogger = new Logger('php-otel');
$otelLogger->pushHandler($otelHandler);

// Optional: log application boot
$otelLogger->info('Laravel application bootstrapping');

/*
|--------------------------------------------------------------------------
| Bootstrap The Laravel Application
|--------------------------------------------------------------------------
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
