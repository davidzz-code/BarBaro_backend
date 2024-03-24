<?php

use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;
use LaravelJsonApi\Laravel\Routing\ResourceRegistrar;

Route::middleware('auth:sanctum')->get('/v1/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('schedules', ScheduleController::class);
Route::apiResource('users', UserController::class);

// JsonApiRoute::server('v1')->prefix('v1')->resources(function (ResourceRegistrar $server) {
//     $server->resource('schedules', JsonApiController::class)->readOnly();
// });

