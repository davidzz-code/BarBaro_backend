<?php

use App\Http\Controllers\Api\AppointmentsController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\WorkerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('appointments', AppointmentsController::class);
Route::apiResource('workers', WorkerController::class);
Route::apiResource('services', ServiceController::class);
