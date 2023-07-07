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


Route::resource("provinces", App\Http\Controllers\Api\ProvinceController::class);
Route::resource("districts", App\Http\Controllers\Api\DistrictController::class);
Route::resource("neighborhoods", App\Http\Controllers\Api\NeighborhoodController::class);
