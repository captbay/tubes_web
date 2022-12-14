<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/verifyEmailSuccess', function () {
    return view('emailSucces');
});

Route::get('/storage/{extra}', function ($extra) {
    return redirect("public/storage/$extra");
})->where('extra', '.*');
// Route::resource('/band', \App\Http\Controllers\BandController::class);
// Route::resource('/komika', \App\Http\Controllers\KomikaController::class);
// Route::resource('/pesulap', \App\Http\Controllers\PesulapController::class);