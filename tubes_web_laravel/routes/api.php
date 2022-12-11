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


// Route::apiResource(
//     '/pembelians',
//     \App\Http\Controllers\PembelianController::class
// );



// Route::post('pembelians/update/{id}', [PembelianController::class, 'update']);



//user 
Route::post('users/login', [UserController::class, 'login']);
Route::post('users/register', [UserController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function () {
    // user
    Route::apiResource(
        '/users',
        \App\Http\Controllers\UserController::class
    );
    Route::post('users/update/{id}', [UserController::class, 'update']);
    Route::post('users/logout', [UserController::class, 'logout']);
    //pembelian belum jadi ada 3
    ////////
    ////
    ////
    // band
    Route::apiResource(
        '/bands',
        \App\Http\Controllers\BandController::class
    );

    Route::post('bands/update/{id}', [BandController::class, 'update']);
    // pesulap
    Route::apiResource(
        '/pesulaps',
        \App\Http\Controllers\PesulapController::class
    );
    Route::post('pesulaps/update/{id}', [PesulapController::class, 'update']);
    //komika
    Route::apiResource(
        '/komikas',
        \App\Http\Controllers\KomikaController::class
    );
    Route::post('komikas/update/{id}', [KomikaController::class, 'update']);
    //pembayaran
    Route::apiResource(
        '/pembayarans',
        \App\Http\Controllers\PembayaranController::class
    );
    Route::post('pembayarans/update/{id}', [PembayaranController::class, 'update']);
});
