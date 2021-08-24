<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/provinces', [App\Http\Controllers\RajaOngkirController::class, 'getProvinces']);
Route::get('/cities/{id}', [App\Http\Controllers\RajaOngkirController::class, 'getCities']);
Route::post('/checkOngkir', [App\Http\Controllers\RajaOngkirController::class, 'checkOngkir']);

