<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksApiController;
use App\Http\Controllers\PinjamApiController;
use App\Http\Controllers\BayarApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('tasks', TasksApiController::class)
    ->middleware('auth:sanctum');

Route::apiResource('pinjam', PinjamApiController::class)
    ->middleware('auth:sanctum');

Route::apiResource('bayar', BayarApiController::class)
    ->middleware('auth:sanctum');
