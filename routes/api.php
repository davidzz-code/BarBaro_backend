<?php

use App\Http\Controllers\Api\AppointmentsController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\WorkerController;
use App\Http\Controllers\Api\ScheduleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;
use LaravelJsonApi\Laravel\Routing\ResourceRegistrar;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResource('schedules', ScheduleController::class);
// Route::apiResource('users', UserController::class);
// Route::apiResource('appointments', AppointmentsController::class);
// Route::apiResource('workers', WorkerController::class);
// Route::apiResource('services', ServiceController::class);


JsonApiRoute::server('v1')->prefix('v1')->resources(function (ResourceRegistrar $server) {
    $server->resource('appointments', JsonApiController::class)->readOnly();
    $server->resource('services', JsonApiController::class);
    $server->resource('schedules', JsonApiController::class);
    $server->resource('workers', JsonApiController::class)->readOnly();
    $server->resource('users', JsonApiController::class);
});

