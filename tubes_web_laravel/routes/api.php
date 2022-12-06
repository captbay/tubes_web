<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource(
    '/bands',
    \App\Http\Controllers\BandController::class
);
Route::apiResource(
    '/komikas',
    \App\Http\Controllers\KomikaController::class
);
Route::apiResource(
    '/pesulaps',
    \App\Http\Controllers\PesulapController::class
);

Route::post('bands/update/{id}', [BandController::class, 'update']);
Route::post('pesulaps/update/{id}', [PesulapController::class, 'update']);
Route::post('komikas/update/{id}', [KomikaController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});