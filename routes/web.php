<?php

use Illuminate\Support\Facades\Artisan;
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

Route::get("clear_cache", function () {
    Artisan::call("optimize:clear");

    echo "Cache cleared";
});

Route::get("refresh-database", function () {
    Artisan::call("migrate:refresh");

    return redirect("/");
});

Route::get('/', function () {
    return view('welcome');
});
